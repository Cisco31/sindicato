<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Anuncio;
use App\Models\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class AdminView extends Component
{
    use WithPagination;
    public $cargado = false;
    public $search = '';

    public function mount()
    {
        $this->usuario = new Usuario();
    }

    public function render()
    {
        $anuncios = Anuncio::join('usuarios', 'id_usuario', '=', 'usuarios.id')
            ->where('titulo', 'LIKE', '%' . $this->search . '%')
            ->orwhere('contenido', 'LIKE', '%' . $this->search . '%')
            ->select(
                'anuncios.*',
                'usuarios.nombre'
            )->latest()->paginate(10);
        $requests = Request::where('estado', 0)->count();
        // $requests = DB::table('requests')
        //     ->where('estado', '0')
        //     ->count();
        // $requests = Request::withCount('estado')->get();
        // foreach ($requests as $request) {
        //     echo $request->estado_count;
        // }
        return view('livewire.admin.admin-view', compact('anuncios', 'requests'))->layout('layouts.app-admin')->slot('slotAdmin');
    }

    public function cargando()
    {
        $this->cargado = true;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}

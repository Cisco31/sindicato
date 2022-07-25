<?php

namespace App\Http\Livewire\Anuncios;

use App\Models\Anuncio;
use App\Models\Usuario;
use Livewire\Component;
use Livewire\WithPagination;

class AnunciosIndex extends Component
{
    public $cargado = false;

    public function mount()
    {
        $this->anuncio = new Anuncio();
    }

    public function render()
    {

        $anuncios = Anuncio::join('usuarios', 'id_usuario', '=', 'usuarios.id')
            ->select(
                'anuncios.*',
                'usuarios.nombre'
            )->latest()->paginate(10);
        $usuarios = Usuario::all();
        return view('livewire.anuncios.anuncios-index', compact('anuncios', 'usuarios'))->layout('layouts.app-user')->slot('slotUser');
    }
}

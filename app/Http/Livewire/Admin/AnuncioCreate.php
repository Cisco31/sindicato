<?php

namespace App\Http\Livewire\Admin;

use App\Models\Anuncio;
use App\Models\Usuario;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class AnuncioCreate extends Component
{

    public function mount()
    {
        $this->anuncio = new Anuncio();
    }

    use WithFileUploads;
    public Anuncio $anuncio;
    public Usuario $usuario;
    public $url_img;
    public $estado;


    public function render()
    {
        $anuncios = Anuncio::where('id_usuario', auth()->user()->id)->paginate(5);
        // $anuncios = Anuncio::join('usuarios', 'id_usuario', '=', 'usuarios.id')
        //     ->select(
        //         'usuarios.*',
        //     )->latest()->paginate(5);
        return view('livewire.admin.anuncio-create', compact('anuncios'))->layout('layouts.app-admin')->slot('slotAdmin');
    }

    public function crearAnuncio()
    {
        $this->validate();
        $this->anuncio->id_usuario = auth()->user()->id;
        if ($this->url_img != null) {
            $this->anuncio->url_img = Storage::disk('public')->put('images/anuncios', $this->url_img);
        }
        $this->anuncio->estado = 1;
        $this->anuncio->save();
        $this->emit('alert-anuncio-create', 'Se ha publicado correctamente el anuncio');
        return redirect(route("admin.view"));
    }

    public function rules()
    {
        return ReglasAnuncio::reglas();
    }
}

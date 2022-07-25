<?php

namespace App\Http\Livewire\Admin;

use App\Models\Anuncio;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AnuncioEdit extends Component
{
    use WithFileUploads;
    public Anuncio $anuncio;
    public $url_img;

    public function mount($anuncio)
    {
        $this->anuncio = $anuncio;
    }

    public function render()
    {
        return view('livewire.admin.anuncio-edit')->layout('layouts.app-admin')->slot('slotAdmin');
    }

    public function editarAnuncio()
    {
        $this->validate();
        if ($this->url_img != null) {
            if ($this->anuncio->url_img != null) {
                Storage::disk('public')->delete($this->anuncio->url_img);
            }
            $this->anuncio->url_img = Storage::disk('public')->put('images/anuncios', $this->url_img);
        }
        $this->anuncio->save();
        $this->emit('alert-anuncio-edit', 'Has modificado correctamente el anuncio');
        return (route('admin.view'));
    }

    protected function rules()
    {
        return ReglasAnuncio::reglas($this->anuncio->id);
    }
}

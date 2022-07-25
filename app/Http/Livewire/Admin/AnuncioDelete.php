<?php

namespace App\Http\Livewire\Admin;

use App\Models\Anuncio;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AnuncioDelete extends Component
{
    public function render()
    {
        return view('livewire.admin.anuncio-delete')->layout('layouts.app-admin')->slot('slotAdmin');
    }

    use WithFileUploads;
    public Anuncio $anuncio;
    public $url_img;

    public function delete()
    {
        Storage::disk('public')->delete($this->anuncio->url_img);
        $this->anuncio->delete();
        $this->emit('alert-anuncio-delete', 'Se ha eliminado correctamente el anuncio');
        return redirect(route('admin.anuncios'));
    }
}

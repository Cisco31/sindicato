<?php

namespace App\Http\Livewire\Documentos;

use App\Models\Descarga;
use App\Models\Documento;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class DocumentosIndex extends Component
{
    public function render()
    {
        $documentos = Documento::all();
        return view('livewire.documentos.documentos-index', compact('documentos'))->layout('layouts.app-user')->slot('slotUser');
    }



    public function descarga($id)
    {
        Descarga::create([
            'usuario_id'=> auth()->user()->id,
            'doc_id'=>$id
        ]);

        $documento = Documento::find($id);
        $documentoLink = $documento->url_doc;

        return Storage::disk('public')->download($documentoLink);
    }

    // public function vista($id)
    // {
    //     $documento = Documento::find($id);
    //     $documentoLink = $documento->url_doc;
    //     // return Storage::disk('public')->get($documentoLink);
    //     $doc = Storage::loadView('template', $documento);
    //     $doc->stream('documentname');
    // }
}

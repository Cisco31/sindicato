<?php

namespace App\Http\Livewire\Admin;

use App\Models\Documento;
use Illuminate\Http\Request;
use Livewire\Component;

class DocumentoUpload extends Component
{
    public $estado;
    public Documento $documento;
    public function render()
    {
        return view('livewire.admin.documento-upload');
    }

    public function fileUpload(Request $req)
    {
        $req->validate([
            'file' => 'required|mimes:doc,docx,pdf|max:2048'
        ]);


        $fileModel = new Documento();
        if ($req->file()) {
            $fileName = $req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('/documentos', $fileName, 'public');
            $fileModel->titulo = $req->file->getClientOriginalName();
            $fileModel->url_doc = $filePath;
            $fileModel->estado = 1;
            $fileModel->save();
            return back()
                ->with('success', 'El documento ha sido guardado.')
                ->with('file', $fileName);
        }
        return view('livewire.admin.documentos-upload');
        $this->emit('alert-docs-create', 'El documento se a guardado exitosamente');
    }
}

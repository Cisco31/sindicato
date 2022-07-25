<?php

namespace App\Exports;

use App\Models\Documento;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class DocumentosExport implements FromView
{
    public function view(): View
    {
        return view('livewire.admin.documentosExcel' , [
            'documentos' => Documento::all()
        ]);
    }
}

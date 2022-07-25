<?php

namespace App\Exports;

use App\Models\Descarga;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class DescargasExport implements FromView
{
    public function view(): View
    {
        return view('livewire.admin.descargasExcel' , [
            'descargas' => Descarga::all()
        ]);
    }
}

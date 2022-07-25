<?php

namespace App\Exports;

use App\Models\Anuncio;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class AnunciosExport implements FromView
{
    public function view(): View
    {
        return view('livewire.admin.anunciosExcel' , [
            'anuncios' => Anuncio::all()
        ]);
    }
}

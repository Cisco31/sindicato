<?php

namespace App\Exports;

use App\Models\Usuario;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

/**class UsuariosExport implements FromCollection
{

    * @return \Illuminate\Support\Collection
    *
    *public function collection()
    {
        return Usuario::all();
    }
}
*/
class UsuariosExport implements FromView
{
    public function view(): View
    {
        return view('livewire.admin.pdfUsers' , [
            'usuarios' => Usuario::all()
        ]);
    }
}

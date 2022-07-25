<?php

namespace App\Exports;

use App\Models\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class RequestsExport implements FromView
{
    public function view(): View
    {
        return view('livewire.admin.requestsExcel', [
            'requests' => Request::all()
        ]);
    }
}

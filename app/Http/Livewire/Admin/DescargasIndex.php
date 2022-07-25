<?php

namespace App\Http\Livewire\Admin;

use App\Exports\DescargasExport;
use App\Models\Descarga;
use Illuminate\Support\Facades\App;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class DescargasIndex extends Component
{
    public function mount()
    {
        $this->descarga = new Descarga();
    }

    use WithPagination;
    public $search = '';
    public $cargado = false;
    public function render()
    {
        $descargas = Descarga::join('usuarios', 'usuario_id', '=', 'usuarios.id')
            ->join('documentos', 'doc_id', '=', 'documentos.id')
            ->where('titulo', 'LIKE', '%' . $this->search . '%')
            ->orwhere('nombre', 'LIKE', '%' . $this->search . '%')
            ->orwhere('apellido', 'LIKE', '%' . $this->search . '%')
            ->select(
                'descargas.*',
                'documentos.*',
                'usuarios.nombre',
                'usuarios.apellido'
            )->orderBy('descargas.created_at', 'asc')->paginate(5);
        return view('livewire.admin.descargas-index', compact('descargas'))->layout('layouts.app-admin')->slot('slotAdmin');
    }

    public function generarPDF()
    {
        $descargas = Descarga::join('usuarios', 'usuario_id', '=', 'usuarios.id')->select(
            'descargas.*',
            'usuarios.nombre',
            'usuarios.apellido'
        )->paginate();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('livewire.admin.pdfDescargas', ['descargas' => $descargas]);
        return $pdf->stream();
    }

    public function exportExcel()
    {
        return Excel::download(new DescargasExport, 'Descargas.xlsx');
    }

    public function cargando()
    {
        $this->cargado = true;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}

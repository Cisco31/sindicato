<div wire:init='cargando'>

    <head>
        <link rel="stylesheet" href="{{ asset('static/css/inputs.css') }}">
    </head>
    <div class="row">
        <div class="col-4 mb-2">
            <div class="input-group ">
                <span class="input-group-text"><i class="fa fa-search"></i></span>
                <input wire:model="search" type="text" class="form-control" placeholder="Buscar">
            </div>
        </div>

        <div class="col mt-2">
            <div class="dropdown">
                <button type="button"
                    class="float-right mr-1 btn btn-sm btn-dark dropdown-toggle" data-toggle="dropdown"><i
                        class="fa fa-file"></i>
                        Generar reporte
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('admin.descargas.pdf') }}" type="button"><i class="fa fa-file-pdf"></i> PDF </a>
                    <a class="dropdown-item" href="{{ route('admin.descargas.excel') }}" type="button"><i class="fa fa-file-excel-o"></i>
                        Excel</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col text-center">
            @if (count((array) $descargas))
                <table class="table table-striped">
                    <thead class="table-dark ">
                        <tr>
                            <td>ID</td>
                            <td>Nombre</td>
                            <td>Documento</td>
                            <td>Fecha</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($descargas as $descarga)
                            <tr>
                                <td>{{ $descarga->id }}</td>
                                <td>{{ $descarga->nombre }} {{ $descarga->apellido }}</td>
                                <td>{{ $descarga->titulo }}</td>
                                <td>{{ $descarga->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
            @endif
            </table>
        </div>
    </div>
    {{ $cargado == true ? $descargas->links() : null }}
</div>

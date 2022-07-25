<div wire:init="cargando">

    <head>
        <link rel="stylesheet" href="{{ asset('static/css/inputs.css') }}">
    </head>

    <!-- Page Content  -->
    <div>
        <div class="row">
            <div class="col-4 mb-2">
                <div class="input-group ">
                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                    <input wire:model="search" type="text" class="form-control" placeholder="Buscar">
                </div>
            </div>

            <div class="col mt-2">

                <button type="button" class="float-right btn btn-sm btn-success" data-bs-toggle="modal" data-dismiss="modal"
                    data-bs-target="#Modaldoc" data-backdrop="false" data-bs-whatever="@mdo"><i
                        class="fa fa-plus-square"></i> Subir Nuevo Documento</button>

                <div class="dropdown">
                    <button type="button"
                        class="float-right mr-1 btn btn-sm btn-dark dropdown-toggle" data-toggle="dropdown"><i
                            class="fa fa-file"></i>
                            Generar reporte
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('admin.descargas.pdf') }}" type="button"><i class="fa fa-file-pdf"></i> PDF </a>
                        <a class="dropdown-item" href="{{ route('admin.documentos.excel') }}" type="button"><i class="fa fa-file-excel-o"></i>
                            Excel</a>
                    </div>
                </div>

            </div>
        </div>

        @if (count((array) $documentos))
            <div class="row">
                <div class="col text-center">
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <td scope="col">Título </td>
                                <td scope="col">Se subio</td>
                                <td scope="col">Estado</td>
                                <td scope="col">Acciones</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($documentos as $documento)
                                <tr>
                                    <td>{{ $documento->titulo }}</td>
                                    <td>{{ $documento->created_at }}</td>
                                    @if ($documento->estado == 1)
                                        <td><span class="badge badge-pill badge-success">Activo</span></td>
                                    @else
                                        <td><span class="badge badge-pill badge-danger">Inactivo</span></td>
                                    @endif
                                    @if ($documento->estado == 1)
                                        <td>
                                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                data-dismiss="modal" title="Desactivar Documento"
                                                data-bs-target="#exampleModal{{ $documento->id }}"
                                                data-backdrop="false" data-bs-whatever="@mdo"><i
                                                    class="fa fa-ban"></i></button>
                                        </td>
                                    @elseif ($documento->estado == 0)
                                        <td>Sin acciones por realizar</td>
                                    @endif
                                </tr>

                                <div wire:ignore.self class="modal" data-backdrop="static"
                                    id="exampleModal{{ $documento->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content text-center">
                                            <form>
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">¿Deseas eliminar
                                                        este
                                                        documento?</h5>
                                                    <button type="button" class="btn-sm btn-close"
                                                        data-bs-dismiss="modal" aria-label="Close">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="mb-3">
                                                            <h2>Titulo del documento</h2>
                                                            <p style="color: black">{{ $documento->titulo }}</p>

                                                            <h2>Dia en que se subio el documento</h2>
                                                            <p style="color: black">{{ $documento->created_at }}
                                                            </p>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    @if ($documento->estado == 1)
                                                        <button wire:click="desactivar({{ $documento->id }})"
                                                            type="button" class="btn btn-success">Desactivar</button>
                                                    @endif
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </tbody>

                    </table>

                </div>
            @else
                <div class="container text-center">
                    <div class="row">
                        <div class="col mb-1">
                            <div class="jumbotron">
                                <h2>No hay resultados por mostrar</h2>
                            </div>
                        </div>
                    </div>
                </div>
        @endif

    </div>
    {{ $cargado == true ? $documentos->links() : null }}
    <!--Modal-->
    <div wire:ignore.self class="modal" data-backdrop="static" id="Modaldoc" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content text-center">
                <form action="{{ route('fileUpload') }}" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Deseas eliminar este anuncio?</h5>
                        <button type="button" class="btn-sm btn-close" data-bs-dismiss="modal"
                            aria-label="Close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div>
                                @include('livewire.admin.documento-upload')
                            </div>
                        </form>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>

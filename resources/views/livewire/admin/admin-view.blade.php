<div>

    <head>
        <link rel="stylesheet" href="{{ asset('static/css/admin-view.css') }}">
    </head>

    <!-- Page Content  -->
    <div>
        <div class="grid" style="--bs-rows: 3; --bs-columns: 3;">
            <div class="g-start-2" style="grid-row: 2">
                <div class="container contenedor">
                    @if (count((array) $anuncios))
                        <div class="jumbotron">
                            @if ($requests > 0)
                                <div class="alert alert-info">
                                    <strong>¡¡Notificación!!</strong> Tienes {{ $requests }} Solicitud(es)
                                    por atender en estado pendiente
                                    <div>
                                        <a href="{{ route('admin.solicitudes') }}"
                                            class="btn btn-sm btn-info">¿Atender?</a>
                                    </div>
                                </div>
                            @endif

                            <div>
                                <a href="{{ route('admin.anuncio-create') }}"
                                    class="btn btn-sm btn-dark float-right"><i class="fa fa-circle-new"></i>
                                    Crear
                                    anuncio</a>
                            </div>
                            <br><br>
                            @foreach ($anuncios as $anuncio)
                                <!--Anuncio-->
                                @if ($anuncio->estado == 1)
                                    <div class="card">
                                        <div class="card-header">
                                            <b>{{ $anuncio->titulo }}</b>
                                        </div>

                                        <div class="card-body ">
                                            <div class="container">
                                                <p>{{ $anuncio->contenido }}</p>
                                                @if ($anuncio->url_img)
                                                    <img class="img-fluid rounded"
                                                        src="{{ Storage::disk('public')->url($anuncio->url_img) }}"
                                                        width="250" height="250"><br>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="card-footer h-10">
                                            <footer>
                                                <a href="{{ route('admin.anuncio-edit', $anuncio) }}"><small
                                                        class="text-muted">Editar</a></small>
                                                <a href="{{ route('admin.anuncio-delete', $anuncio) }}"><small
                                                        class="text-muted">Desactivar</a></small>
                                                <small class="float-right text-muted muted"><b>Creado el dia
                                                        {{ $anuncio->created_at }} por
                                                        {{ $anuncio->nombre }}</b></a></small>
                                            </footer>
                                        </div>
                                    </div> <br>
                                @endif
                            @endforeach
                        </div>
                    @else
                        <div class="jumbotron">
                            <div>
                                <a href="{{ route('admin.anuncio-create') }}"
                                    class="btn btn-sm btn-dark float-right"><i class="fa fa-save"></i>
                                    Crear
                                    anuncio</a>
                            </div>
                            <h1>
                                Sin anuncios por mostrar
                            </h1>
                        </div>
                    @endif

                </div>
            </div>
        </div>
        {{ $cargado == true ? $anuncios->links() : null }}
    </div>

</div>

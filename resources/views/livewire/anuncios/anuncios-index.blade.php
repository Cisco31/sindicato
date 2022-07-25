<div>

    <head>
        <link rel="stylesheet" href="{{ asset('static/css/admin-view.css') }}">
    </head>


    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
        <div class="grid" style="--bs-rows: 3; --bs-columns: 3;">
            <div class="g-start-2" style="grid-row: 2">
                <div class="container contenedor">

                    @if (count((array) $anuncios))

                        <div class="jumbotron">
                            @foreach ($anuncios as $anuncio)
                                <!--Anuncio-->
                                <div class="card">
                                    <div class="card-header"><b>{{ $anuncio->titulo }}</b>
                                    </div>

                                    <div class="card-body ">
                                        <div class="container">
                                            <p>{{ $anuncio->contenido }}</p>
                                            @if ($anuncio->url_img)
                                                <img class="img-fluid rounded" src="{{ Storage::disk('public')->url($anuncio->url_img) }}"
                                                    width="350" height="350"><br>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="card-footer h-10">
                                        <footer>
                                            <small class="float-right text-muted muted"><b>Creado el dia
                                                    {{ $anuncio->created_at }} por
                                                    {{ $anuncio->nombre }}</b></a></small>
                                        </footer>
                                    </div>
                                </div><br>
                            @endforeach
                        </div>
                    @else
                        <div class="jumbotron">
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

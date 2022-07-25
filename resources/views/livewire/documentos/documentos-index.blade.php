<div>
    <div>
        <h3 class="pt-4 pb-2">Formatos</h3>

        <div class="row">
            @foreach ($documentos as $documento)
                @if ($documento->estado == 1)
                    <div class="col-sm-4">
                        <div class="card text-dark bg-light mb-3" style="max-width: 25rem; height: 10rem;">
                            <div class="card-body text-center" style="margin-top: 25px;">
                                <h5 class="card-title">{{ $documento->titulo }}</h5>
                                <button wire:click="descarga({{ $documento->id }})" type="button"
                                    class="btn btn-primary"><i
                                        class="glyphicon glyphicon-download">Descargar</i></button>
                                {{-- <button wire:click="vista({{ $documento->id }})" type="button"
                                    class="btn btn-info"><i class="glyphicon glyphicon-download">Vista
                                        previa</i></button> --}}

                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

    </div>
</div>

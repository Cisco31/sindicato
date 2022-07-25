<div>
    <!-- Page Content  -->
    <div>
        <div class="mx-auto text-center card" style="width: 45rem;">
            <div class="card-header">
                <h1>¿Quieres eliminar este anuncio?</h2>
            </div>
            <div class="card-body">
                <h2 for="">Titulo:</h2>
                <p style="color: black">{{ $anuncio->titulo }}</p>
                <h2 for="">Contenido:</h2>
                <p style="color: black">{{ $anuncio->contenido }}</p>
                <p>Imagen que subio con el anuncio:</p>
                <img class="img-fluid" width="350" height="350"
                    src="{{ Storage::disk('public')->url($anuncio->url_img != null ? $anuncio->url_img : 'images/anuncios/anuncio.jpg') }}"
                    class="card-img-top" alt="">
            </div>
            <div class="card-footer">
                <button wire:click="delete" type="button" style="background-color: #0c8461"
                    class="float-right btn btn-info btn-sm">Confirmar</button>
                <a href="{{ route('admin.anuncios') }}" class="float-left btn btn-danger btn-sm">Cancelar</a>
            </div>
        </div>
    </div>
</div>

</div>

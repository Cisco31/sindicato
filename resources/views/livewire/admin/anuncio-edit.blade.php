<div>

    <head>
        <link rel="stylesheet" href="{{ asset('static/css/inputs.css') }}">
    </head>

    <!-- Page Content  -->
    <div>
        <form wire:submit.prevent="editarAnuncio">
            <div class="card">
                <div class="card-header">
                    <h5>Para editar el anuncio simplemente hay que eliminar el contenido de los campos y escribir el
                        nuevo.</h5>
                    <p>Para la imagen simplemente se selecciona la imagen a subir y se mostrara una vista previa de
                        la imagen.</p>
                </div>
                <div class="card-body">
                    @include('livewire.admin.formulario-anuncio')
                </div>
            </div>
        </form>
    </div>
</div>

</div>

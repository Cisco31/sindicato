<div>

    <head>
        <link rel="stylesheet" href="{{ asset('static/css/inputs.css') }}">
    </head>

    <!-- Page Content  -->
    <div>
        <form wire:submit.prevent="crearAnuncio">
            <div class="card">
                <div class="card-header">
                    <h5>Para crear un nuevo anuncio solo hay que llenar los siguientes campos.</h5>
                    <p style="color: black">En caso de no querer subir una imagen simplemente se llenan los campos y se
                        da clic en publicar.</p>
                </div>
                <div class="card-body">
                    @include('livewire.admin.formulario-anuncio')
                </div>
            </div>
        </form>
    </div>

</div>

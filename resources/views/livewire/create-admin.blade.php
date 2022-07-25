<div>

    <head>
        <link rel="stylesheet" href="{{ asset('static/css/inputs.css') }}">
    </head>


    <div class="row mt-3">
        <div class="col justify-content-middle">
            <form wire:submit.prevent="crearAdmin">
                <div class="container cont-user">
                    <div class="card">
                        <div class="card-header">
                            <h2>Formulario de registro</h2>
                            <p style="color: black">Para registrar un nuevo usuario se deben llenar todos los campos que
                                se muestran debajo.
                            </p>
                        </div>
                        <div class="card-body">
                            @include('livewire.admin.formulario')
                        </div>
                        <br>
                        <div class="card-footer">
                            <button class="float-right btn btn-success"><i class="fa fa-save"></i> Guardar</button>
                            <a href="{{ route('admin.usuarios') }}" class="btn btn-secondary"><i
                                    class="fa fa-home"></i>
                                Regresar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

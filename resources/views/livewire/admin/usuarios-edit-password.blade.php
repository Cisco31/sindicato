<div>


    <div class="mt-3">
        <form wire:submit.prevent="editpwd">
            <div class="card">
                <h5 class="card-header text-center">
                    Perfil de usuario
                </h5>
                <h5 class="container">En este apartado podras visualizar tus datos personales, y solo podras modificar tu contraseña en caso de ser necesario. Si tu información esta incorrecta comunicate con el administrador de la página.</h5>
                <div class="card-body ">
                    @include('livewire.admin.formulario-pwd')
                </div>
                <div class="card-footer text-center">
                    <button type="submit" style="background-color: #0c8461" class="btn btn-success btn-sm">Guardar</button>
                </div>
            </div>
        </form>
    </div>

</div>

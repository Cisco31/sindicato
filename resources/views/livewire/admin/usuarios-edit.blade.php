<div>


    <!-- Page Content  -->
    <div>
        <form wire:submit.prevent="editar">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h2>Editar usuario</h2>
                        <p style="color: black">Para editar la informacion de un usuario simplemente habra que borrar la
                            informacion que
                            venga en
                            el
                            campo el cual queramos modificar y escribir la nueva informacion a guardar.</p>
                    </div>
                    <div class="card-body">
                        @include('livewire.admin.formularioEdit')
                    </div>
                    <br>
                    <div class="card-footer">
                        <button class="float-right btn btn-primary"><i class="fa fa-edit"></i> Editar</button>
                        <a href="{{ route('admin.usuarios') }}" class="btn btn-secondary"><i class="fa fa-home"></i>
                            Regresar</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

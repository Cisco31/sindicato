<div>

    <div class="mx-auto card text-center" style="width: 18rem; margin-top: 75px;">
        <div class="card-header">
            <h5 class="card-title">Editar solicitud</h5>
            <p>Para editar la solicitud solo seleccione una nueva fecha</p>
        </div>
        <div class="card-body">
            @include('livewire.requests.formulario')
        </div>
        <div class="card-header">
            <button wire:click="edit" class="btn btn-success btn-sm">Confirmar</button>
            <a href="{{ route('requests.create') }}" class="btn btn-danger btn-sm">Cancelar</a>
        </div>
    </div>
</div>

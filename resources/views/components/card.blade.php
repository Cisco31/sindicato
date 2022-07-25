<div class="card">
    <div class="card-header">
        {{ $headerText }}
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $cardTitle }}</h5>
        <p class="card-text">{{ $bodyCard }}</p>
        <x-boton color="primary">
            <x-slot name="contenido">
                Imprimir
            </x-slot>
        </x-boton>
    </div>
</div>

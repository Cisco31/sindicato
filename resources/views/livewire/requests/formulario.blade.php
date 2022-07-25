<div>

    <head>
        <style>
            input[type="date"]:valid {
                border: 2px solid #0c8461;
            }
        </style>
    </head>
    <div class="text-center mx-auto">
        <div class="form-group text-center">
            <h6>Elegir fecha</h6>
            <input wire:model="request.fecha" type="date" class="form-control">
            @error('request.fecha')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

    </div>
</div>

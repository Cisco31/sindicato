<?php

namespace App\Http\Livewire\Requests;

class ReglasMotivo
{
    public static function reglas()
    {
        return [
            'request.motivo' => 'required|string'
        ];
    }
}

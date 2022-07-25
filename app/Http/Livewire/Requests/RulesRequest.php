<?php

namespace App\Http\Livewire\Requests;

class RulesRequest
{
    public static function reglas()
    {
        return [
            'request.fecha' => 'required|date|after:yesterday',
            'request.id_usuario' => 'required',
        ];
    }
}

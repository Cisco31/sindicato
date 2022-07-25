<?php

namespace App\Http\Livewire\Admin;

class ReglaEstado
{

    public static function reglas()
    {
        return [
            'estado' => 'boolean|required'
        ];
    }
}

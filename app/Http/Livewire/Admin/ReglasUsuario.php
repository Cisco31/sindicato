<?php

namespace App\Http\Livewire\Admin;


class ReglasUsuario
{
    public static function reglas($id = null)
    {
        $validarpassword = ($id) ? 'nullable|min:8' : 'required|min:8';
        return [
            'usuario.nombre' => 'required|string',
            'usuario.apellido' => 'required|string',
            'usuario.email' => 'required|email|unique:usuarios,email,' . $id,
            'usuario.telefono' => 'required|string',
            'usuario.puesto' => 'required|string',
            'usuario.departamento' => 'required|string',
            'usuario.curp' => 'required|string',
            'usuario.rfc' => 'required|string',
            'usuario.ine' => 'required|string',
            'usuario.fecha_ingreso' => 'required|date',
            'usuario.fecha_afiliacion' => 'required|date',
        ];
    }

    public static function reglasPWD($id = null)
    {
        $validarpassword = ($id) ? 'nullable|min:8' : 'required|min:8';
        return [
            'password' => $validarpassword,
            'confirm_password' => 'same:password'
        ];
    }
}

<?php

namespace App\Http\Livewire\IniciarSesion;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function render()
    {
        return view('livewire.iniciar-sesion.logout');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}

<?php

namespace App\Http\Livewire\IniciarSesion;

use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.iniciar-sesion.login');
    }

    public function login()
    {
        $datos = $this->validate();

        // if (auth()->user($datos)->estado == 0) {
        //     $this->emit('alert-login-0', 'Este usuario esta temporalmente inavilitado. Comunicate con el administrador de la pagina para que te otorge el permiso de acceso');
        //     return redirect(route('index'));
        // }

        if (Auth::attempt($datos)) {
            if (auth()->user($datos)->estado == 0) {
                return $this->emit('alert-user-disabled', 'Usuario desactivado, comuníquese con el administrador del sitio web.');
            } else {
                if (auth()->user($datos)->is_admin == 1) {
                    return redirect(route('admin.view'));
                } else {
                    return redirect(route('anuncios.index'));
                }
            }
        } else {
            $this->emit('alert-login', 'Correo y/o contraseña incorrectos.');
        }
    }

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:8|string'
        ];
    }
}

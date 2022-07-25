<?php

namespace App\Http\Livewire\Admin;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class UsuariosEdit extends Component
{

    use WithFileUploads;
    public Usuario $usuario;
    public $confirm_password;
    public $password;
    public $rfc;
    public $curp;
    public $ine;

    public function render()
    {

        return view('livewire.admin.usuarios-edit')->layout('layouts.app-admin')->slot('slotAdmin');
    }


    public function editar()
    {
        $this->validate();
        if ($this->password) {
            $this->usuario->password = Hash::make($this->password);
        }
        $this->usuario->curp = strtoupper($this->usuario->curp);
        $this->usuario->rfc = strtoupper($this->usuario->rfc);
        $this->usuario->ine = strtoupper($this->usuario->ine);
        $this->usuario->save();
        $this->emit('alert-user-edit', 'Se ha modificado correctamente al usuario');
    }

    protected function rules()
    {
        return ReglasUsuario::reglas($this->usuario->id);
    }
}

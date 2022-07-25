<?php

namespace App\Http\Livewire\Requests;

use App\Models\Request;
use Livewire\Component;

class RequestEdit extends Component
{
    public Request $request;

    public function render()
    {
        return view('livewire.requests.request-edit')->layout('layouts.app-user')->slot('slotUser');
    }

    public function edit()
    {
        if ($this->request->id_usuario != auth()->user()->id) {
            return redirect(route('requests.create'));
        }

        $this->request->save();
        $this->emit('edit-success', 'Se modificó la solicitud con éxito');

        return redirect(route('requests.create'));
    }

    protected function rules()
    {
        return RulesRequest::reglas();
    }
}

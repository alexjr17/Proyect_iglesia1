<?php

namespace App\Http\Livewire;

use App\Models\Evento;
use Livewire\Component;

class ModalEvento extends Component
{
    public $evento;
    public function mount(Evento $evento)
    {
        $this->evento=$evento;
    }
    public function render()
    {
        $eventomodal = Evento::where('id', $this->evento->id)->get();
        return view('livewire.modal-evento',compact('eventomodal'));
    }
}

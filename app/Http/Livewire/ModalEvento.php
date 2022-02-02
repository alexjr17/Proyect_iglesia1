<?php

namespace App\Http\Livewire;

use App\Models\Evento;
use Livewire\Component;

class ModalEvento extends Component
{
    public $evento;
    public function render(Evento $evento)
    {
        return view('livewire.modal-evento',compact('evento'));
    }
}

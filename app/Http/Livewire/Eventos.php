<?php

namespace App\Http\Livewire;

use App\Models\Evento;
use Livewire\Component;

class Eventos extends Component
{
    public function render()
    {
        $eventos = Evento::orderBy('id', 'desc')->get();
        return view('livewire.eventos',compact('eventos'));
    }
}

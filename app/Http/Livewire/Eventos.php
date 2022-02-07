<?php

namespace App\Http\Livewire;

use App\Models\Evento;
use Livewire\Component;
use Carbon\Carbon;
class Eventos extends Component
{
    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function render()
    {
        $eventos = Evento::orderBy('id', 'desc')->get();
        return view('livewire.eventos',compact('eventos'));
    }
}

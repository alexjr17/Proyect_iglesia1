<?php

namespace App\Http\Livewire;

use App\Models\Evento;
use Livewire\Component;
use Carbon\Carbon;

class Eventos extends Component
{
    public $search;
    public $show_evento;

    public function __construct()
    {
        Carbon::setLocale('es_MX', 'es', 'ES', 'es_MX.utf8');
    }

    public function render()
    {
        if (!$this->search) {
            $eventos = Evento::orderBy('id', 'desc')->get();
        } else {
            $eventos = Evento::where('start', 'LIKE', '%' . $this->search . '%')
                ->get();
        }



        if (!$this->show_evento) {
            return view('livewire.eventos', compact('eventos'));
        } else {
            $this->show_evento->start = Carbon::createFromFormat('Y-m-d H:i:s', $this->show_evento->start)->toFormattedDateString();
            return view('livewire.eventos', compact('eventos',$this->show_evento));
        }
    }
    public function show(Evento $evento)
    {
        $this->show_evento = $evento;
    }
}

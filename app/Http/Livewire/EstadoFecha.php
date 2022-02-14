<?php

namespace App\Http\Livewire;

use App\Models\Evento;
use Livewire\Component;
use Carbon\Carbon;
use Carbon\CarbonInterface;

class EstadoFecha extends Component
{
    public function __construct()
    {
        Carbon::setLocale('es_MX');
    }
    public $evento;
    public function mount(Evento $evento){
        $this->evento = $evento;
    }
    public function render()
    {

        $estado_fecha = Carbon::now()->diffForHumans($this->evento->start);
        return view('livewire.estado-fecha',compact('estado_fecha', $this->evento));
    }
}

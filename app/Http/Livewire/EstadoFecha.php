<?php

namespace App\Http\Livewire;

use App\Models\Evento;
use Livewire\Component;
use Carbon\Carbon;
use Carbon\CarbonInterface;

class EstadoFecha extends Component
{
    public $evento;
    public function mount(Evento $evento){
        $this->evento = $evento;
    }
    public function render()
    {

        $estado_fecha = Carbon::now()->subDays()->diffForHumans($this->evento->start,  ['syntax' => CarbonInterface::DIFF_RELATIVE_TO_NOW]);
        return view('livewire.estado-fecha',compact('estado_fecha', $this->evento));
    }
}

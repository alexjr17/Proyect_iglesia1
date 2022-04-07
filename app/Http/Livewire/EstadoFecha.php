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
    public function mount(Evento $evento)
    {
        $this->evento = $evento;
    }
    public function render()
    {
        $estado_fecha = Carbon::now()->diffForHumans($this->evento->start, [
            'syntax' => CarbonInterface::DIFF_RELATIVE_TO_NOW,
            'options' => Carbon::JUST_NOW | Carbon::ONE_DAY_WORDS | Carbon::TWO_DAY_WORDS,
        ]);
        $this->evento->start = Carbon::createFromFormat('Y-m-d H:i:s', $this->evento->start)->toFormattedDateString();
        return view('livewire.estado-fecha', compact('estado_fecha'))->with($this->evento);
    }
}

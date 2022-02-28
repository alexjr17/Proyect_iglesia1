<?php

namespace App\Http\Livewire;

use App\Models\Diezmo;
use App\Models\Ofrenda;
use Livewire\Component;

class ValanceIndex extends Component
{
    public function render()
    {
        $diezmos = Diezmo::sum('monto');
        $ofrendas = Ofrenda::sum('recaudo');
        
        return view('livewire.valance-index', compact('diezmos', 'ofrendas'));
    }
}

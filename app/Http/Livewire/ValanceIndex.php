<?php

namespace App\Http\Livewire;

use App\Models\Diezmo;
use App\Models\Gasto;
use App\Models\Ofrenda;
use Livewire\Component;

class ValanceIndex extends Component
{
    public $search;
    public $t_ingresos, $t_valance;

    public function render()
    {
        setlocale(LC_MONETARY, 'en_US.UTF-8');
        if (!$this->search) {
            $diezmos = Diezmo::sum('monto');
            $ofrendas = Ofrenda::sum('recaudo');
            $gastos = Gasto::sum('monto');
        } else {
            $diezmos = Diezmo::where('created_at', 'LIKE', '%' . $this->search . '%')
                ->sum('monto');
            $ofrendas = Ofrenda::where('created_at', 'LIKE', '%' . $this->search . '%')
                ->sum('recaudo');
            $gastos = Gasto::where('created_at', 'LIKE', '%' . $this->search . '%')
                ->sum('monto');
        }
        $t_ingresoss = $this->sumaingresos($diezmos, $ofrendas);
        $t_valancee = $this->totalvalance($gastos);
        return view('livewire.valance-index', compact('diezmos', 'ofrendas', 'gastos', 't_ingresoss', 't_valancee'));
    }

    public function sumaingresos($ing1, $ing2)
    {
        return $this->T_ingresos = $ing1 + $ing2;
    }

    public function totalvalance($gastos)
    {
        return $this->T_valance = $this->T_ingresos - $gastos;
    }
}

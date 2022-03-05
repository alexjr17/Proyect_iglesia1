<?php

namespace App\Http\Livewire;

use App\Models\Diezmo;
use App\Models\Gasto;
use App\Models\Miembro;
use App\Models\Ofrenda;
use App\Models\User;
use App\Models\Evento;
use Carbon\Carbon;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class ValanceIndex extends Component
{
    public $search;
    public $t_ingresos, $t_valance;

    public function render()
    {
        $roles = Role::all();
        $diezmos = Diezmo::where('created_at', 'LIKE', '%' . $this->search . '%')
            ->sum('monto');
        $ofrendas = Ofrenda::where('created_at', 'LIKE', '%' . $this->search . '%')
            ->sum('recaudo');
        $gastos = Gasto::where('created_at', 'LIKE', '%' . $this->search . '%')
            ->sum('monto');
        $eventos = Evento::where('start', 'LIKE', '%' . $this->search . '%')->count();
        $users = User::withCount('roles')->count();

        $t_ingresoss = $this->sumaingresos($diezmos, $ofrendas);
        $t_valancee = $this->totalvalance($gastos);

        $miembros = Miembro::count();
        return view('livewire.valance-index',
            compact('diezmos', 'ofrendas', 'gastos', 't_ingresoss', 't_valancee', 'miembros', 'users', 'roles', 'eventos')
        );
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

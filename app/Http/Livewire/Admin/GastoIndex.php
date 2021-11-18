<?php

namespace App\Http\Livewire\Admin;

use App\Models\Gasto;
use Livewire\Component;
use Livewire\WithPagination;

class GastoIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {

        $gastos = Gasto::where('monto', 'LIKE', '%'. $this->search. '%')       
                    ->latest('id')
                    ->paginate();
        return view('livewire.admin.gasto-index', compact('gastos'));
    }
}

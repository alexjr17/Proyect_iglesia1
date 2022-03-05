<?php

namespace App\Http\Livewire\Admin;

use App\Models\Gasto;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class GastoIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {

        $gastos = Gasto::Where(function ($query) {
                        $query->where('monto', 'LIKE', '%' . $this->search . '%')
                        ->orwhere('created_at', 'LIKE', '%' . $this->search . '%');
                    })
                    ->latest('id')
                    ->paginate();
        return view('livewire.admin.gasto-index', compact('gastos'));
    }
}

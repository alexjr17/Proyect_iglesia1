<?php

namespace App\Http\Livewire\Admin;

use App\Models\Ofrenda;
use Livewire\Component;
use Livewire\WithPagination;

class OfrendaIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        $ofrendas = Ofrenda::where('user_id', auth()->user()->id)
                                    ->where('recaudo', 'LIKE', '%'. $this->search. '%')
                                    ->orwhere('created_at', 'LIKE', '%'. $this->search. '%')             
                                    ->latest('id')
                                    ->paginate();
        return view('livewire.admin.ofrenda-index', compact('ofrendas'));
    }
}

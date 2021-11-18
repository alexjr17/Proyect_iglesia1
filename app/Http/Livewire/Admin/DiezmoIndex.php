<?php

namespace App\Http\Livewire\Admin;

use App\Models\Diezmo;
use Livewire\Component;
use Livewire\WithPagination;

class DiezmoIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {
        $diezmos = Diezmo::
                    // where('user_id', auth()->user()->id)
                    latest('id')
                    ->paginate();

        return view('livewire.admin.diezmo-index', compact('diezmos'));
    }
}

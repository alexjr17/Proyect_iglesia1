<?php

namespace App\Http\Livewire\Admin;

use App\Models\Miembro;
use Livewire\Component;
use Livewire\WithPagination;

class MiembroShow extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {
        $miembros = Miembro::where('nombre', 'LIKE', '%'. $this->search. '%')      
                                    ->latest('id')
                                    ->get();
        return view('livewire.admin.miembro-show', compact('miembros'));
    }
}

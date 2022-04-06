<?php

namespace App\Http\Livewire\Admin;

use App\Models\Miembro;
use Livewire\Component;

use Livewire\WithPagination;

class MiembrosIndex extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {
        $indices = ['Nombre', 'Localidad', 'Telefono', 'Bautizo', ''];
        $miembros = Miembro::all();
                    // where('user_id', '=', auth()->user()->id)->
                    // Where(function($query) {
                    //     $query->where('nombre', 'LIKE', '%'. $this->search. '%')
                    //           ->orwhere('apellido', 'LIKE', '%'. $this->search. '%');
                    // })        
                    // ->latest('id')
                    // ->paginate();

        return view('livewire.admin.miembros-index', compact('miembros', 'indices'));
    }
}

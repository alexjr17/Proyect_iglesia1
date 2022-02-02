<?php

namespace App\Http\Livewire\Admin;

use App\Models\Carrucel;
use Livewire\Component;

class CarrucelIndex extends Component
{
    public function render()
    {
        $carrucels = Carrucel::orderBy('id', 'desc')->get();
        return view('livewire.admin.carrucel-index', compact('carrucels'));
    }
}

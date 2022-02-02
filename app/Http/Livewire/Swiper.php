<?php

namespace App\Http\Livewire;

use App\Models\Carrucel;
use Livewire\Component;

class Swiper extends Component
{
    public function render()
    {
        $carrucels = Carrucel::all();
        return view('livewire.swiper', compact('carrucels'));
    }
}

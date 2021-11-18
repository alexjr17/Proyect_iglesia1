<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $categorias = [
            'Inicio',
            'Nosotros',
            'Contactanos'
        ]; 
        return view('livewire.navigation', compact('categorias'));
    }
}

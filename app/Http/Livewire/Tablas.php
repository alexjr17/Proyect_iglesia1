<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tablas extends Component
{
    public $indices;
    public function mount($indices){
        // dd($this->indices);
        $this->indices = $indices;
    }
    public function render()
    {
        return view('livewire.tablas')->with($this->indices);
    }
}

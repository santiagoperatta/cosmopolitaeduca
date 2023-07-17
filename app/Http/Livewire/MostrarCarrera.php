<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MostrarCarrera extends Component
{
    public $carrera;
	
	public function render()
    {
        return view('livewire.mostrar-carrera');
    }
}

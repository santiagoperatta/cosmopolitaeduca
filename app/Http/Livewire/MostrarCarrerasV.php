<?php

namespace App\Http\Livewire;

use App\Models\Carrera;
use Livewire\Component;

class MostrarCarrerasV extends Component
{
    public $carreras;
	
	public function render()
	{
		$this->carreras = Carrera::where('grado_id', 2)->get();
	
		return view('livewire.mostrar-carreras-v');
	}
}

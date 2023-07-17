<?php

namespace App\Http\Livewire;

use App\Models\Carrera;
use Livewire\Component;

class MostrarCursos extends Component
{
    public $carreras;
	
	public function render()
	{
		$this->carreras = Carrera::where('grado_id', 3)->get();
	
		return view('livewire.mostrar-cursos');
	}
}

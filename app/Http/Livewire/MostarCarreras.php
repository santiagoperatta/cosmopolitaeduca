<?php

namespace App\Http\Livewire;

use App\Models\Carrera;
use Livewire\Component;

class MostarCarreras extends Component
{
    protected $listeners=['eliminarCarrera'];

	public function eliminarCarrera(Carrera $carrera){
		$carrera->delete();
	}
	
	public function render()
    {
        $carreras = Carrera::where('user_id', auth()->user()->id)->paginate(10);
		return view('livewire.mostar-carreras', [
			'carreras' => $carreras
		]);
    }
}

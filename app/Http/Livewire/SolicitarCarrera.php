<?php

namespace App\Http\Livewire;

use App\Models\Carrera;
use App\Notifications\NuevoInteresado;
use Livewire\Component;

class SolicitarCarrera extends Component
{
	public $carrera;

	public function mount(Carrera $carrera){
		$this->carrera = $carrera;
	}

	public function solicitar()
    {
        //Crear el candidato
		$this->carrera->interesados()->create([
			'user_id' => auth()->user()->id
		]);


		//Crear notificacion y enviar mail
		$this->carrera->admin->notify(new NuevoInteresado($this->carrera->id, $this->carrera->titulo, auth()->user()->id));

		//Mensaje OK
		session()->flash('mensaje', 'Ya estamos al tanto de tu interes! Te contactaremos via Email.');
	}

	public function render()
    {
        return view('livewire.solicitar-carrera');
    }
}

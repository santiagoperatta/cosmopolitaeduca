<?php

namespace App\Http\Livewire;

use App\Models\Carrera;
use Livewire\Component;

class HomeCarreras extends Component
{
	public $termino;
	public $categoria;
	public $grado;

	protected $listeners = ['terminosBusqueda' => 'buscar'];

	public function buscar($termino, $categoria, $grado){
		$this->termino = $termino;
		$this->categoria = $categoria;
		$this->grado = $grado;
	}
	
	
	public function render()
    {

		$carreras = Carrera::when($this->termino, function($query){
			$query->where('titulo', 'LIKE', "%" . $this->termino . "%");
		})
		->when($this->categoria, function($query){
			$query->where('categoria_id', $this->categoria);
		})
		->when($this->grado, function($query){
			$query->where('grado_id', $this->grado);
		});

        return view('livewire.home-carreras', [
			'carreras' => $carreras
		]);
    }
}

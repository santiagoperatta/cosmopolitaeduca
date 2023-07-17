<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Grado;
use Livewire\Component;

class FiltrarCarreras extends Component
{
	public $termino;
	public $categoria;
	public $grado;

	public function leerDatosFormulario(){
		$this->emit('terminosBusqueda', $this->termino, $this->categoria, $this->grado);
	}

    public function render()
    {
		$grados = Grado::all();
		$categorias = Categoria::all();

        return view('livewire.filtrar-carreras', [
			'grados' => $grados,
			'categorias' => $categorias
		]);
    }
}

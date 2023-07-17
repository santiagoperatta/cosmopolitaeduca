<?php

namespace App\Http\Livewire;

use App\Models\Grado;
use App\Models\Carrera;
use Livewire\Component;
use App\Models\Categoria;
use Livewire\WithFileUploads;

class EditarCarrera extends Component
{
	public $carrera_id;
	public $titulo;
	public $categoria;
	public $grado;
	public $duracion;
	public $ultimo_dia;
	public $descripcion;
	public $requisitos;
	public $programa;
	public $modalidad;
	public $certificacion;
	public $precio;
	public $imagen;
	public $imagen_nueva;

	use WithFileUploads;

	protected $rules = [
		'titulo' => 'required|string',
		'categoria' => 'required',
		'grado' => 'required',
		'duracion' => 'required',
		'ultimo_dia' => 'required',
		'descripcion' => 'required',
		'requisitos' => 'required',
		'programa' => 'required',
		'modalidad' => 'required',
		'certificacion' => 'required',
		'precio' => 'required',
	];

	//pasar valores old a form de edit
	public function mount(Carrera $carrera){
		$this->carrera_id = $carrera->id;
		$this->titulo = $carrera->titulo;
		$this->categoria = $carrera->categoria_id;
		$this->grado = $carrera->grado_id;
		$this->duracion = $carrera->duracion;
		$this->ultimo_dia = $carrera->ultimo_dia;
		$this->descripcion = $carrera->descripcion;
		$this->requisitos = $carrera->requisitos;
		$this->programa = $carrera->programa;
		$this->modalidad = $carrera->modalidad;
		$this->certificacion = $carrera->certificacion;
		$this->precio = $carrera->precio;
		$this->imagen = $carrera->imagen;
	}

	public function editarCarrera(){
		$datos=$this->validate();

		//Si hay una nueva img
		if($this->imagen_nueva){
			$imagen=$this->imagen_nueva->store('public/carreras');
			$datos['imagen'] = str_replace('public/carreras/', '', $imagen);
		}

		//Encontrar carrera a editar
		$carrera = Carrera::find($this->carrera_id);

		//Asignar valores
		$carrera->titulo = $datos['titulo'];
		$carrera->categoria_id = $datos['categoria'];
		$carrera->grado_id = $datos['grado'];
		$carrera->duracion = $datos['duracion'];
		$carrera->ultimo_dia = $datos['ultimo_dia'];
		$carrera->descripcion = $datos['descripcion'];
		$carrera->requisitos = $datos['requisitos'];
		$carrera->programa = $datos['programa'];
		$carrera->modalidad = $datos['modalidad'];
		$carrera->certificacion = $datos['certificacion'];
		$carrera->precio = $datos['precio'];
		$carrera->imagen = $datos['imagen'] ?? $carrera->imagen;

		//Guardar carrera
		$carrera->save();

		//redireccionar
		session()->flash('mensaje', 'La carrera se guardo correctamente');

		return redirect()->route('carreras.index');
	}
	
	public function render()
    {
		$categorias = Categoria::all();
		$grados = Grado::all();

        return view('livewire.editar-carrera', [
			'categorias' => $categorias,
			'grados' => $grados,
		]);
    }
}

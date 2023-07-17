<?php

namespace App\Http\Livewire;

use App\Models\Carrera;
use App\Models\Categoria;
use App\Models\Grado;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearCarrera extends Component
{
	public $titulo;
	public $categoria;
	public $grado;
	public $duracion;
	public $ultimo_dia;
	public $descripcion;
	public $imagen;
	public $requisitos;
	public $certificacion;
	public $modalidad;
	public $programa;
	public $precio;

	use WithFileUploads;
	
	protected $rules = [
		'titulo' => 'required|string',
		'categoria' => 'required',
		'grado' => 'required',
		'duracion' => 'required',
		'ultimo_dia' => 'required',
		'descripcion' => 'required',
		'imagen' => 'required',
		'requisitos' => 'required',
		'certificacion' => 'required',
		'modalidad' => 'required',
		'programa' => 'required',
		'precio' => 'required'
	];

	
	public function crearCarrera(){
		$datos = $this->validate();

		//Almacenar imagen
		$imagen=$this->imagen->store('public/carreras');
		$datos['imagen']=str_replace('public/carreras/', '', $imagen);

		//Crear carrera
		Carrera::create([
			'titulo'=> $datos['titulo'],
			'categoria_id'=> $datos['categoria'],
			'grado_id'=> $datos['grado'],
			'duracion'=> $datos['duracion'],
			'ultimo_dia'=> $datos['ultimo_dia'],
			'descripcion'=> $datos['descripcion'],
			'imagen'=> $datos['imagen'],
			'requisitos'=> $datos['requisitos'],
			'modalidad'=> $datos['modalidad'],
			'programa'=> $datos['programa'],
			'precio'=> $datos['precio'],
			'certificacion'=> $datos['certificacion'],
			'user_id' => auth()->user()->id,
		]);

		//Crear un msj
		session()->flash('mensaje', 'La carrera se publico correctamente');

		//Redireccionar usuario
		return redirect()->route('carreras.index');

	}

    public function render()
    {
		$categorias = Categoria::all();
		$grados = Grado::all();
        
		return view('livewire.crear-carrera', [
			'categorias' => $categorias,
			'grados' => $grados
		]);
    }
}

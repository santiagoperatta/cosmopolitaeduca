<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraVController extends Controller
{
	public function index()
	{
		$carreras = Carrera::where('grado_id', 2)->get();
	
		return view('carrerav.index', ['carreras' => $carreras]);
	}
}
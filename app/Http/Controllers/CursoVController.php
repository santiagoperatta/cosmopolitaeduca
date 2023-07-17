<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CursoVController extends Controller
{
	public function index()
	{
		$carreras = Carrera::where('grado_id', 3)->get();
	
		return view('cursov.index', ['carreras' => $carreras]);
	}
}

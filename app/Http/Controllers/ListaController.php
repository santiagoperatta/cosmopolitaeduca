<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class ListaController extends Controller
{
	public function index()
	{
		$carreras = Carrera::all();
		return view('lista.index', ['carreras' => $carreras]);
	}
}

<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
	public function __invoke()
	{
		$carreras = Carrera::paginate(20); // Pagina las carreras, mostrando 20 por página
	
		return view('home.index', compact('carreras'));
	}
}

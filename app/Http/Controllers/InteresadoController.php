<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Interesado;
use Illuminate\Http\Request;

class InteresadoController extends Controller
{
    public function index(Carrera $carrera)
    {
        return view('interesados.index', [
			'carrera' => $carrera
		]);
    }

}

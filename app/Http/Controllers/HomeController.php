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
		return view('home.index', compact('carreras'));
	}
}

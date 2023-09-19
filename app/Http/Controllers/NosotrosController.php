<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class NosotrosController extends Controller
{
	public function index()
	{
		return view('nosotros.index');
	}
}

<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
		$this->authorize('viewAny', Carrera::class);
        return view('carreras.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
		$this->authorize('create', Carrera::class);
		return view('carreras.create');
    }
    /**
     * Display the specified resource.
     */
    public function show(Carrera $carrera)
    {
		return view('carreras.show', [
			'carrera' => $carrera
		]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrera $carrera)
    {
		$this->authorize('update', $carrera);
		return view('carreras.edit', [
			'carrera' => $carrera
		]);
    }
}

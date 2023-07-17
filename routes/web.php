<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoVController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CarreraVController;
use App\Http\Controllers\InteresadoController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\NotificacionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class)->name('home');

Route::get('/dashboard', [CarreraController::class, 'index'])->middleware(['auth', 'verified', 'rol.admin'])->name('carreras.index');
Route::get('/carreras/create', [CarreraController::class, 'create'])->middleware(['auth', 'verified'])->name('carreras.create');
Route::get('/carreras/{carrera}/edit', [CarreraController::class, 'edit'])->middleware(['auth', 'verified'])->name('carreras.edit');
Route::get('/carreras/{carrera}', [CarreraController::class, 'show'])->name('carreras.show');
Route::get('/candidatos/{carrera}', [InteresadoController::class, 'index'])->name('interesados.index');
Route::get('/cursos', [CursoVController::class, 'index'])->name('cursosv.index');
Route::get('/carreras', [CarreraVController::class, 'index'])->name('carrerasv.index');
Route::get('/listado', [ListaController::class, 'index'])->name('lista.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Notificaciones
Route::get('/notificaciones', NotificacionController::class)->middleware(['auth', 'verified', 'rol.admin'])->name('notificaciones');

require __DIR__.'/auth.php';

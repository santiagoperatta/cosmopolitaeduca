<?php

namespace App\Models;

use App\Models\User;
use App\Models\Grado;
use App\Models\Categoria;
use App\Models\Interesado;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carrera extends Model
{
    use HasFactory;

	protected $fillable = [
		'titulo',
		'categoria_id',
		'grado_id',
		'duracion',
		'ultimo_dia',
		'descripcion',
		'imagen',
		'requisitos',
		'certificacion',
		'modalidad',
		'programa',
		'precio',
		'user_id'	
	];

	public function categoria(){
		return $this->belongsTo(Categoria::class);
	}

	public function grado(){
		return $this->belongsTo(Grado::class);
	}

	public function interesados(){
		return $this->hasMany(Interesado::class)->orderBy('created_at', 'DESC');
	}

	public function admin(){
		return $this->belongsTo(User::class, 'user_id');
	}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $table = 'instituciones'; // Nombre de la tabla en la base de datos

    // Aquí puedes definir las columnas que necesitas
    protected $fillable = ['institucion', 'nombre']; // Por ejemplo, 'institucion' sería el nombre de la imagen

    // Si no necesitas timestamps (created_at y updated_at), puedes desactivarlos
    public $timestamps = false;

    // ... aquí puedes definir relaciones u otros métodos específicos de tu modelo
}
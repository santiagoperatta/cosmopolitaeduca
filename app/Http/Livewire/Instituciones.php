<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Institucion; // Asegúrate de importar el modelo Institucion

class Instituciones extends Component
{
    public function render()
    {
        return view('livewire.instituciones');
    }
}
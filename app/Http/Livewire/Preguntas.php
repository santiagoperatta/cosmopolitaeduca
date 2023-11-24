<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Preguntas extends Component
{
	public $preguntasFrecuentes;

    public function render()
    {
		$this->preguntasFrecuentes = [
			[
				'pregunta' => '¿Cuáles son los requisitos de inscripción?',
				'respuesta' => 'Puedes aplicar y empezar tu proceso de admisión cuando tú desees. Una vez que seas admitido, podrás elegir cuándo comenzar tu carrera. Tenemos grupos que inician todos los meses.',
			],
			[
				'pregunta' => '¿Cómo es la modalidad de cursado?',
				'respuesta' => 'Sí, muchos de nuestros alumnos ingresaron a Cosmopolita Educa sin tener conocimientos previos. ¡La carrera está diseñada para que puedas aprender desde cero!',
			],
			[
				'pregunta' => '¿Qué elementos necesito para estudiar a distancia?
				',
				'respuesta' => 'Cosmopolita Educa es en español por lo que no es necesario contar con un nivel de inglés mínimo para ingresar a nuestras carreras.',
			],
			[
				'pregunta' => '¿Cuáles son los costos?',
				'respuesta' => 'No existe una edad máxima para ingresar a Cosmopolita Educa. Hemos tenido alumnos de más de 50 años que pudieron insertarse sin inconvenientes en el mercado laboral.',
			],
			[
				'pregunta' => '¿Con qué beneficios puedo acceder?',
				'respuesta' => 'Tu computadora deberá tener un mínimo. 1.6 GHz de procesamiento, 4 GB de RAM y 120 GB de Disco Duro. Además necesitarás una cámara y micrófono, que podrán ser las de la computadora o las del celular.',
			],
		];
        return view('livewire.preguntas');
    }
}

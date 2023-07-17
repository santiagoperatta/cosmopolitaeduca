<?php

namespace Database\Factories;

use App\Models\Carrera;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarreraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Carrera::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence,
            'categoria_id' => $this->faker->numberBetween(1, 11),
            'grado_id' => $this->faker->numberBetween(1, 3),
            'duracion' => $this->faker->randomElement(['6 meses', '1 año', '2 años']),
            'ultimo_dia' => $this->faker->date('Y-m-d'),
            'descripcion' => $this->faker->paragraph,
            'imagen' => $this->faker->image('storage/app/public/carreras', 400, 300, null, false),
            'requisitos' => $this->faker->paragraph,
            'certificacion' => $this->faker->boolean,
            'modalidad' => $this->faker->randomElement(['Presencial', 'Virtual']),
            'programa' => $this->faker->paragraph,
            'precio' => $this->faker->randomFloat(2, 1000, 10000),
            'user_id' => 1,
        ];
    }
}
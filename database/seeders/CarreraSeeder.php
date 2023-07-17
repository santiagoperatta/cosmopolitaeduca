<?php

namespace Database\Seeders;

use App\Models\Carrera;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Carrera::factory()->count(6)->create();
    }

}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GradosSeeder;
use Database\Seeders\CategoriaSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
		$this->call(CategoriaSeeder::class);
		$this->call(GradosSeeder::class);

    }
}

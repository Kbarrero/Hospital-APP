<?php

use Illuminate\Database\Seeder;
use App\Models\Paciente;
use App\Models\Recepcionista;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Crear pacientes
        Paciente::factory()->count(10)->create();

         // Crear 5 recepcionistas
        Recepcionista::factory(5)->create();
    }
}
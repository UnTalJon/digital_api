<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Funcion;

class FuncionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Funcion::firstOrCreate([
            'nombre' => 'CEBV Forense'
        ]);
        Funcion::firstOrCreate([
            'nombre' => 'CEBV Inmediata'
        ]);
        Funcion::firstOrCreate([
            'nombre' => 'Autoridad'
        ]);
        Funcion::firstOrCreate([
            'nombre' => 'Colectivo'
        ]);
        Funcion::firstOrCreate([
            'nombre' => 'Familiar'
        ]);
    }
}

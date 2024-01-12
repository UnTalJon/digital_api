<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fase;

class FaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fase::firstOrCreate([
            'nombre' => 'Preliminar'
        ]);
        Fase::firstOrCreate([
            'nombre' => 'Piloto'
        ]);
        Fase::firstOrCreate([
            'nombre' => 'Ordinaria'
        ]);
    }
}

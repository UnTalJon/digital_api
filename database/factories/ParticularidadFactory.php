<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use App\Models\Busqueda;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Particularidad>
 */
class ParticularidadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $myFaker = Faker::create('es_ES');

        return [
            'busqueda_id' => Busqueda::inRandomOrder()->first()->id,
            'contenido' => $myFaker->text()
        ];
    }
}

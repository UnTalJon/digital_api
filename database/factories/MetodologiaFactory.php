<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use App\Models\Busqueda;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Metodologia>
 */
class MetodologiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'busqueda_id' => Busqueda::inRandomOrder()->first()->id,
            'contenido' => fake()->text()
        ];
    }
}

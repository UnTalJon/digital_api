<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use MatanYadaev\EloquentSpatial\Objects\Point;
use Faker\Factory as Faker;
use App\Models\Categoria;
use App\Models\Fase;
use App\Models\Municipio;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Busqueda>
 */
class BusquedaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $myFaker = Faker::create('es_ES');

        $categoria = Categoria::inRandomOrder()->first()->id;
        $fase = Fase::inRandomOrder()->first()->id;
        $fechaInicial = $myFaker->dateTimeBetween('now', '+1 month');
        $fechaFinal =  random_int(0, 1) ? $myFaker->dateTimeBetween($fechaInicial, '+1 month') : null;
        $lat = $myFaker->latitude;
        $lng = $myFaker->longitude;

        return [
            'categoria_id' => $categoria,
            'fase_id' => $fase,
            'lugar_creacion' => Municipio::where('nombre', 'Xalapa')->first()->id,
            'fecha_inicial' => $fechaInicial,
            'fecha_final' => $fechaFinal,
            'coordenadas' => new Point($lat, $lng),
            'localidad' => $myFaker->city(),
            'lugar_comision' => Municipio::inRandomOrder()->first()->id,
            'extension_comision' => $myFaker->randomFloat(2, 100, 2000),
            'consideraciones_finales' => $myFaker->text()
        ];
    }
}

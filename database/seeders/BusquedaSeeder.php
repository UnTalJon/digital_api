<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Busqueda;
use App\Models\Particularidad;
use App\Models\Metodologia;
use App\Models\Plan;
use App\Models\Bitacora;
use App\Models\Imagen;

class BusquedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Busqueda::factory()->count(6)
            ->state(['categoria_id' => 1])
            ->hasPersonas(1)
            ->hasGrupos(8)
            ->has(
                Particularidad::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(1)->hasImagenes(2))
                    ->hasImagenes(1)
            )
            ->has(
                Metodologia::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(5))
            )
            ->has(
                Plan::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(5)->hasImagenes(3))
                    ->hasImagenes(3)
            )
            ->hasImagenes(3)
            ->create();

        Busqueda::factory()->count(8)
            ->state(['categoria_id' => 2])
            ->hasGrupos(3)
            ->has(
                Particularidad::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(1)->hasImagenes(2))
                    ->hasImagenes(1)
            )
            ->has(
                Metodologia::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(5))
            )
            ->has(
                Plan::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(3)->hasImagenes(1))
                    ->hasImagenes(3)
            )
            ->hasImagenes(3)
            ->create();

        Busqueda::factory()->count(9)
            ->state(['categoria_id' => 1])
            ->hasPersonas(4)
            ->hasGrupos(10)
            ->has(
                Particularidad::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(1)->hasImagenes(2))
                    ->hasImagenes(1)
            )
            ->has(
                Metodologia::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(5))
            )
            ->has(
                Plan::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(9)->hasImagenes(3))
                    ->hasImagenes(3)
            )
            ->hasImagenes(3)
            ->create();

        Busqueda::factory()->count(4)
            ->state(['categoria_id' => 2])
            ->hasGrupos(3)
            ->has(
                Particularidad::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(1)->hasImagenes(5))
                    ->hasImagenes(1)
            )
            ->has(
                Metodologia::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(8))
            )
            ->has(
                Plan::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(2)->hasImagenes(1))
                    ->hasImagenes(3)
            )
            ->hasImagenes(3)
            ->create();

        Busqueda::factory()->count(5)
            ->state(['categoria_id' => 1])
            ->hasPersonas(6)
            ->hasGrupos(15)
            ->has(
                Particularidad::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(1)->hasImagenes(2))
                    ->hasImagenes(1)
            )
            ->has(
                Metodologia::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(5))
            )
            ->has(
                Plan::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(5)->hasImagenes(3))
                    ->hasImagenes(3)
            )
            ->hasImagenes(3)
            ->create();

        Busqueda::factory()->count(6)
            ->state(['categoria_id' => 2])
            ->hasGrupos(1)
            ->has(
                Particularidad::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(1)->hasImagenes(2))
                    ->hasImagenes(1)
            )
            ->has(
                Metodologia::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(3))
            )
            ->has(
                Plan::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(6)->hasImagenes(5))
                    ->hasImagenes(3)
            )
            ->hasImagenes(3)
            ->create();

        Busqueda::factory()->count(8)
            ->state(['categoria_id' => 1])
            ->hasPersonas(6)
            ->hasGrupos(5)
            ->has(
                Particularidad::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(1)->hasImagenes(2))
                    ->hasImagenes(1)
            )
            ->has(
                Metodologia::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(5))
            )
            ->has(
                Plan::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(3)->hasImagenes(1))
                    ->hasImagenes(1)
            )
            ->hasImagenes(3)
            ->create();

        Busqueda::factory()->count(9)
            ->state(['categoria_id' => 2])
            ->hasGrupos(7)
            ->has(
                Particularidad::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(1)->hasImagenes(8))
                    ->hasImagenes(1)
            )
            ->has(
                Metodologia::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(8))
            )
            ->has(
                Plan::factory()->count(1)
                    ->hasAttached(Bitacora::factory()->count(15)->hasImagenes(3))
                    ->hasImagenes(2)
            )
            ->hasImagenes(3)
            ->create();
    }
}

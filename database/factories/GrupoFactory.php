<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grupo>
 */
class GrupoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $myFaker = Faker::create('es_ES');

        $funcion = DB::table('funcions')->inRandomOrder()->first()->id;

        $nombreForense = $myFaker->randomElement([
            'Antropología Forense',
            'Odontología Forense',
            'Patología Forense',
            'Psiquiatría Forense',
            'Toxicología Forense',
            'Genética Forense',
            'Entomología Forense',
            'Balística Forense',
            'Informática Forense',
            'Dactiloscopia',
            'Biología Forense',
            'Química Forense',
            'Medicina Legal',
            'Criminalística',
            'Psicología Forense'
        ]);

        $nombreInmediata = $myFaker->randomElement([
            'Búsqueda Acuática',
            'Búsqueda en Montaña',
            'Búsqueda Urbana',
            'Búsqueda en Zonas Desérticas',
            'Búsqueda Aérea con Drones',
            'Búsqueda con Perros K-9',
            'Equipo de Buzos de Rescate',
            'Búsqueda en Zonas Forestales',
            'Equipo de Escalada para Rescate',
            'Búsqueda en Cavernas y Cuevas',
            'Búsqueda y Rescate en Avalanchas',
            'Equipo de Rescate en Alturas',
            'Búsqueda en Áreas Inhóspitas',
            'Equipo de Rastreo y Seguimiento',
            'Unidad de Respuesta Rápida'
        ]);

        $nombreAutoridades = $myFaker->randomElement([
            'Policía Municipal',
            'Policía Estatal',
            'Policía Federal',
            'Guardia Nacional',
            'Procuraduría General de Justicia del Estado',
            'Fiscalía General de la República (FGR)',
            'Peritos Forenses',
            'Bomberos',
            'Protección Civil',
            'Cruz Roja Mexicana',
            'Brigada de Búsqueda y Rescate',
            'Unidad Canina de Búsqueda y Rescate',
            'Servicio Médico Forense (SEMEFO)'
        ]);

        $nombreColectivo = $myFaker->randomElement([
            'Luz de Esperanza',
            'Rastreadores de Paz',
            'Voces Unidas',
            'Búsqueda Sin Fin',
            'Encontrando Caminos',
            'Ecos de Ayuda',
            'Caminantes de Esperanza',
            'Unidos por la Verdad',
            'Raíces de Justicia',
            'Senderos de Libertad',
            'Manos Solidarias',
            'Brigada del Corazón',
            'Ángeles de la Búsqueda',
            'Horizonte de Amor',
            'Guardianes de la Fe',
            'Paso a Paso',
            'Lazos de Unión',
            'Estrellas Guía',
            'Rescate de Almas',
            'Caminos de Vida'
        ]);

        $representante = $myFaker->name();

        switch ($funcion) {
            case 1:
                $nombre = $nombreForense;
                break;

            case 2:
                $nombre = $nombreInmediata;
                break;

            case 3:
                $nombre = $nombreAutoridades;
                break;

            case 4:
                $nombre = $nombreColectivo;
                break;
            
            default:
                $nombre = $representante;
                break;
        }

        return [
            'nombre' => $nombre,
            'representante' => $representante,
            'funcion_id' => $funcion
        ];
    }
}

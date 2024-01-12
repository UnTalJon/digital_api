<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estado;
use App\Models\Municipio;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $veracruz = Estado::where('nombre', 'Veracruz')->first();
        $puebla = Estado::where('nombre', 'Puebla')->first();

        // Municipios de Veracruz
        Municipio::firstOrCreate([
            'nombre' => 'Acayucan',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Álamo Temapache',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Alvarado',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Boca del Río',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Córdoba',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Coatepec',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Coatzacoalcos',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Cosamaloapan',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Cosoleacaque',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Fortín',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Huatusco',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Ixhuatlán del Sureste',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Jáltipan',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'La Antigua',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Lerdo de Tejada',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Martínez de la Torre',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Minatitlán',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Misantla',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Nanchital',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Orizaba',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Papantla',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Poza Rica',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'San Andrés Tuxtla',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Santiago Tuxtla',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Tantoyuca',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Tihuatlán',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Tierra Blanca',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Tuxpan',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Veracruz (Puerto de Veracruz)',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Xalapa',
            'estado_id' => $veracruz->id
        ]);

        // Municipios de Puebla
        Municipio::firstOrCreate([
            'nombre' => 'Tehuacán',
            'estado_id' => $puebla->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Tepeyahualco',
            'estado_id' => $puebla->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Teziutlán',
            'estado_id' => $puebla->id
        ]);

        // Continuación de municipios de Veracruz
        Municipio::firstOrCreate([
            'nombre' => 'Agua Dulce',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Altotonga',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Alto Lucero de Gutiérrez Barrios',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Atoyac',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Camarón de Tejeda',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Catemaco',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Cerro Azul',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Chicontepec',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Chinampa de Gorostiza',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Chocamán',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Emiliano Zapata',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Gutiérrez Zamora',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Ixhuatlancillo',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Ixtaczoquitlán',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Jamapa',
            'estado_id' => $veracruz->id
        ]);
        Municipio::firstOrCreate([
            'nombre' => 'Jesús Carranza',
            'estado_id' => $veracruz->id
        ]);
    }
}

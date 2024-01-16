<?php

namespace App\Filters;

use Iluminate\Http\Request;
use App\Filters\ApiFilter;

class BusquedaFilter extends ApiFilter {
    protected $safeParameters = [
        'categoriaId' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
        'faseId' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
        'fechaCreacion' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
        'lugarCreacion' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
        'fechaInicial' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
        'fechaFinal' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
        'coordenadas' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
        'localidad' => ['eq', 'ne'],
        'lugarComision' => ['eq', 'ne'],
        'extension' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
        'consideracionesFinales' => ['eq'],
    ];
    
    protected $columnMap = [
        'categoria' => 'categoria_id',
        'fase' => 'fase_id',
        'fechaCreacion' => 'fecha_creacion',
        'lugarCreacion' => 'lugar_creacion',
        'fechaInicial' => 'fecha_inicial',
        'fechaFinal' => 'fecha_final',
        'lugarComision' => 'lugar_comision',
        'extension' => 'extension_comision',
        'consideracionesFinales' => 'consideraciones_finales',
    ];

}
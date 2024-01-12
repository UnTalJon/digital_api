<?php

namespace App\Filters;

use Iluminate\Http\Request;
use App\Filters\ApiFilter;

class BusquedaFilter extends ApiFilter {
    protected $safeParameters = [
        'categoria_id' => ['eq'],
        'fase_id' => ['eq'],
        'lugar_elaboracion' => ['eq', 'like'],
        'fecha_inicial' => ['eq', 'like'],
        'fecha_final' => ['eq', 'like'],
        'coordenadas' => ['eq', 'like'],
        'localidad' => ['eq', 'like'],
        'lugar_comision' => ['eq', 'ne', 'like'],
        'extension_comision' => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'consideraciones_finales' => ['eq', 'like'],
    ];
    protected $columnMap = [];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'like' => 'like'
    ];
}
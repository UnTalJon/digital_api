<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MatanYadaev\EloquentSpatial\SpatialBuilder;
use MatanYadaev\EloquentSpatial\Objects\Point;
use MatanYadaev\EloquentSpatial\Traits\HasSpatial;

class Imagen extends Model
{
    use HasFactory;

    use HasSpatial;

    protected $fillables = [
        'url',
        'descripcion',
        'coordenadas'
    ];

    protected $casts = [
        'coordenadas' => Point::class
    ];

    /**
     * Get the bitacora that owns the imagen.
     */
    public function bitacora() {
        return $this->belongsToMany(Bitacora::clas);
    }

    /**
     * The busquedas that belongs to the imagen.
     */
    public function busqueda() {
        return $this->belongsToMany(Busqueda::class);
    }

    /**
     * The particularidades that belongs to the imagen.
     */
    public function particularidades() {
        return $this->belongsToMany(Particularidad::class);
    }

    /**
     * The metodologias that belongs to the imagen.
     */
    public function metodologias() {
        return $this->belongsToMany(Metodologia::class);
    }

    /**
     * The planes de busqueda that belongs to the imagen.
     */
    public function planes() {
        return $this->belongsToMany(Plan::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MatanYadaev\EloquentSpatial\SpatialBuilder;
use MatanYadaev\EloquentSpatial\Objects\Point;
use MatanYadaev\EloquentSpatial\Traits\HasSpatial;

class Busqueda extends Model
{
    use HasFactory;

    use HasSpatial;

    /**
     * The table associated with the model
     * 
     * @var string
     */
    protected $table = 'busquedas';

    protected $casts = [
        'coordenadas' => Point::class
    ];

    /**
     * The personas that belongs to the busqueda.
     */
    public function personas() {
        return $this->belongsToMany(Persona::class);
    }

    /**
     * Get the categoria that owns the busqueda.
     */
    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }

    /**
     * Get the fase that owns the busqueda.
     */
    public function fase() {
        return $this->belongsTo(Fase::class);
    }

    /**
     * Get the municipio that owns the lugar de elaboracion de la busqueda.
     */
    public function lugar_elaboracion() {
        return $this->belongsTo(Municipio::class);
    }

    /**
     * Get the municipio that owns the lugar de la comision.
     */
    public function lugar_comision() {
        return $this->belongsTo(Municipio::class);
    }

    /**
     * The grupos that belongs to the busqueda.
     */
    public function grupos() {
        return $this->belongsToMany(Grupo::class);
    }

    /**
     * Get the particularidad associated with the busqueda.
     */
    public function particularidad() {
        return $this->hasOne(Particularidad::class);
    }

    /**
     * Get the metodologia associated with the busqueda.
     */
    public function metodologia() {
        return $this->hasOne(Metodologia::class);
    }

    /**
     * Get the plan de busqueda associated with the busqueda.
     */
    public function plan() {
        return $this->hasOne(Plan::class);
    }

    /**
     * The imagenes that belongs to the busqueda.
     */
    public function imagenes() {
        return $this->belongsToMany(Imagen::class);
    }
}

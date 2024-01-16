<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    /**
     * The table associated with the model
     * 
     * @var string
     */
    //protected $table = 'plans';

    /**
     * Get the busqueda that owns the plan de busqueda.
     */
    public function busqueda() {
        return $this->belongsTo(Busqueda::class);
    }

    /**
     * Get the bitacoras for the plan de busqueda.
     */
    public function bitacoras() {
        return $this->belongsToMany(Bitacora::class);
    }

    /**
     * The imagenes that belongs to the plan de busqueda.
     */
    public function imagenes() {
        return $this->belongsToMany(Imagen::class);
    }
}

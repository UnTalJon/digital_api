<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Particularidad extends Model
{
    use HasFactory;

    /**
     * Get the busqueda that owns the particularidad.
     */
    public function busqueda() {
        return $this->belongsTo(Busqueda::class);
    }

    /**
     * Get the bitacora associated with the particularidad.
     */
    public function bitacoras() {
        return $this->belongsToMany(Bitacora::class);
    }

    /**
     * The imagenes that belongs to the particularidad.
     */
    public function imagenes() {
        return $this->belongsToMany(Imagen::class);
    }
}

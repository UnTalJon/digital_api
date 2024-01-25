<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discapacidad extends Model
{
    protected $table = 'discapacidades';

    protected $fillable = [
        'nombre',
    ];
}

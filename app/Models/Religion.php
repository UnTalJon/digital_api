<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    protected $table = 'religiones';
    protected $fillable = [
        'nombre',
    ];
}

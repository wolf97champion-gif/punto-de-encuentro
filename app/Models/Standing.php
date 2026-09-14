<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{
    use HasFactory;

    protected $fillable = [
        'grupo',
        'equipo',
        'puntos',
        'jugados',
        'ganados',
        'empatados',
        'perdidos',
        'goles_a_favor',
        'goles_en_contra',
        'ultimas',
    ];
}
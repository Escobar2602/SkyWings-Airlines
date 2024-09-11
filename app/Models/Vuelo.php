<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;

    protected $fillable = [
        'origen',
        'destino',
        'hora_salida',
        'hora_llegada',
        'dia_salida',
        'valor',
    ];
}
    
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tripulacion extends Model
{
    use HasFactory;

    protected $table = 'tripulacion';

    protected $fillable = [
        'nombre',
        'apellido',
        'documento',
        'destino',
    ];
}
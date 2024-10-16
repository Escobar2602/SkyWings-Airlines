<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{
    use HasFactory;

    protected $fillable = ['avion', 'capacidad', 'matricula', 'modelo', 'estado'];

    protected $casts = [
        'capacidad' => 'integer',
    ];
}

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
        'fecha',
        'hora',
    ];

    protected $casts = [
        'fecha' => 'date',
        'hora' => 'datetime',
    ];
}
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
        'aircraft_id',
    ];

    public function aircraft()
    {
        return $this->belongsTo(Aircraft::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
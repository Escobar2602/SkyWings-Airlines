<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RutasYTarifas extends Model
{
    use HasFactory;

    protected $table = 'rutasytarifas';
    protected $primaryKey = 'id_rutasytarifas';

    protected $fillable = [
        'ciudad_origen',
        'ciudad_destino',
        'precio',
        'duracion'
    ];
}
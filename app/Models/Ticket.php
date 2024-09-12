<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['vuelo_id', 'seat_number', 'passenger_name'];

    public function vuelo()
    {
        return $this->belongsTo(Vuelo::class);
    }
}
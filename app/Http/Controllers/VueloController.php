<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use Illuminate\Http\Request;

class VueloController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'origen' => 'required|string',
            'destino' => 'required|string',
            'hora_salida' => 'required',
            'hora_llegada' => 'required',
            'dia_salida' => 'required|date',
            'valor' => 'required|numeric'
        ]);

        Vuelo::create([
            'origen' => $request->origen,
            'destino' => $request->destino,
            'hora_salida' => $request->dia_salida . ' ' . $request->hora_salida . ':00', // Concatenar la fecha y hora
            'hora_llegada' => $request->dia_salida . ' ' . $request->hora_llegada . ':00',
            'dia_salida' => $request->dia_salida,
            'valor' => $request->valor,
        ]);


        return redirect()->back()->with('success', 'Ruta de vuelo creada exitosamente.');
    }
    public function getOrigins()
    {
        return Vuelo::distinct('origen')->pluck('origen');
    }

    public function getDestinations()
    {
        return Vuelo::distinct('destino')->pluck('destino');
    }
}


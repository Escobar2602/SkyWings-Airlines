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
            'hora_salida' => $request->hora_salida,
            'hora_llegada' => $request->hora_llegada,
            'dia_salida' => $request->dia_salida,
            'valor' => $request->valor,
        ]);

        return redirect()->back()->with('success', 'Ruta de vuelo creada exitosamente.');
    }
}

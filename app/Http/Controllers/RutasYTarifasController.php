<?php

namespace App\Http\Controllers;

use App\Models\RutasYTarifas;
use Illuminate\Http\Request;

class RutasYTarifasController extends Controller
{
    public function index()
{
    $rutasytarifas = RutasYTarifas::all();
    return view('rutasytarifas.index', compact('rutasytarifas'));
}

    public function create()
    {
        return view('rutasytarifas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ciudad_origen' => 'required|string',
            'ciudad_destino' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'duracion' => 'required|integer|min:1',
        ]);

        RutasYTarifas::create($request->all());

        return redirect()->route('rutasytarifas.index')
            ->with('success', 'Ruta y tarifa creada exitosamente.');
    }

    // Agrega aquí otros métodos como show, edit, update, destroy según sea necesario
}
<?php

namespace App\Http\Controllers;

use App\Models\Aeropuerto;
use Illuminate\Http\Request;

class AeropuertoController extends Controller
{
    public function index()
    {
        $aeropuertos = Aeropuerto::all();
        return view('aeropuertos.index', compact('aeropuertos'));
    }

    public function create()
    {
        return view('aeropuertos.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'codigo' => 'required|string|size:3|unique:aeropuertos',
            'ciudad' => 'required|string|max:255',
            'pais' => 'required|string|max:255',
            'zona_horaria' => 'required|string|max:255',
        ]);

        Aeropuerto::create($validatedData);

        return redirect()->route('aeropuertos.index')->with('success', 'Aeropuerto creado exitosamente.');
    }
}
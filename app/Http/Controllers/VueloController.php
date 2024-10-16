<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use Illuminate\Http\Request;

class VueloController extends Controller
{
    public function index()
    {
        $vuelos = Vuelo::all();
        return view('vuelos.index', compact('vuelos'));
    }

    public function create()
    {
        return view('vuelos.create');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'origen' => 'required|string|max:255',
                'destino' => 'required|string|max:255',
                'fecha' => 'required|date',
                'hora' => 'required|date_format:H:i',
            ]);

            $vuelo = Vuelo::create($validatedData);
            
            \Log::info('Vuelo creado: ' . $vuelo->id);

            return redirect()->route('vuelos.index')->with('success', 'Vuelo creado exitosamente.');
        } catch (\Exception $e) {
            \Log::error('Error al crear vuelo: ' . $e->getMessage());
            return back()->with('error', 'Error al crear el vuelo: ' . $e->getMessage())->withInput();
        }
    }
}
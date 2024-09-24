<?php

namespace App\Http\Controllers;

use App\Models\Tripulacion;
use Illuminate\Http\Request;

class TripulacionController extends Controller
{
    public function index()
    {
        $tripulacion = Tripulacion::all();
        return view('tripulacion.index', compact('tripulacion'));
    }

    public function create()
    {
        return view('tripulacion.create');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nombre' => 'required|string|max:255',
                'apellido' => 'required|string|max:255',
                'documento' => 'required|string|max:20|unique:tripulacion',
                'destino' => 'required|string|max:255',
            ]);

            $tripulante = Tripulacion::create($validatedData);
            
            \Log::info('Tripulante creado: ' . $tripulante->id);

            return redirect()->route('tripulacion.index')->with('success', 'Tripulante creado exitosamente.');
        } catch (\Exception $e) {
            \Log::error('Error al crear tripulante: ' . $e->getMessage());
            return back()->with('error', 'Error al crear el tripulante: ' . $e->getMessage())->withInput();
        }
    }
}
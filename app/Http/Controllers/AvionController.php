<?php

namespace App\Http\Controllers;

use App\Models\Avion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvionController extends Controller
{
    public function index()
    {
        $aviones = Avion::all();
        return view('aviones.index', compact('aviones'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'avion' => 'required|string|max:255',
            'capacidad' => 'required|integer|min:1',
            'matricula' => 'required|string|unique:aviones,matricula|max:255',
            'modelo' => 'required|in:narrowBody,wideBody,regional',
            'estado' => 'required|string|max:255',
        ]);

        $avion = Avion::create($validated);

        if ($request->ajax()) {
            return response()->json($avion, 201);
        }

        return redirect()->route('aviones.index')->with('success', 'Aeronave creada exitosamente.');
    }

    public function update(Request $request, Avion $avion)
    {
        $validated = $request->validate([
            'avion' => 'required|string|max:255',
            'capacidad' => 'required|integer|min:1',
            'matricula' => 'required|string|unique:aviones,matricula,' . $avion->id . '|max:255',
            'modelo' => 'required|in:narrowBody,wideBody,regional',
            'estado' => 'required|string|max:255',
        ]);

        $avion->update($validated);

        if ($request->ajax()) {
            return response()->json($avion, 200);
        }

        return redirect()->route('aviones.index')->with('success', 'Aeronave actualizada exitosamente.');
    }

    public function destroy(Avion $avion)
    {
        $avion->delete();

        if (request()->ajax()) {
            return response()->json(null, 204);
        }

        return redirect()->route('aviones.index')->with('success', 'Aeronave eliminada exitosamente.');
    }
}

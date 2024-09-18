<?php

namespace App\Http\Controllers;

use App\Models\Aircraft;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AircraftController extends Controller
{
    public function index()
    {
        $aircraft = Aircraft::all();
        return view('aircraft.index', compact('aircraft'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'avion' => 'required|string|max:255',
            'capacidad' => 'required|integer|min:1',
            'matricula' => 'required|string|unique:aircraft,matricula|max:255',
            'modelo' => 'required|in:narrowBody,wideBody,regional',
            'estado' => 'required|string|max:255',
        ]);

        $aircraft = Aircraft::create($validated);

        if ($request->ajax()) {
            return response()->json($aircraft, 201);
        }

        return redirect()->route('aircraft.index')->with('success', 'Aeronave creada exitosamente.');
    }

    public function update(Request $request, Aircraft $aircraft)
    {
        $validated = $request->validate([
            'avion' => 'required|string|max:255',
            'capacidad' => 'required|integer|min:1',
            'matricula' => 'required|string|unique:aircraft,matricula,' . $aircraft->id . '|max:255',
            'modelo' => 'required|in:narrowBody,wideBody,regional',
            'estado' => 'required|string|max:255',
        ]);

        $aircraft->update($validated);

        if ($request->ajax()) {
            return response()->json($aircraft, 200);
        }

        return redirect()->route('aircraft.index')->with('success', 'Aeronave actualizada exitosamente.');
    }

    public function destroy(Aircraft $aircraft)
    {
        $aircraft->delete();

        if (request()->ajax()) {
            return response()->json(null, 204);
        }

        return redirect()->route('aircraft.index')->with('success', 'Aeronave eliminada exitosamente.');
    }
}
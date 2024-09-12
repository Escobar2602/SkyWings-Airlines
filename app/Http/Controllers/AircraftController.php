<?php

namespace App\Http\Controllers;

use App\Models\Aircraft;
use App\Models\Vuelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AircraftController extends Controller
{
    public function index()
    {
        $aircraft = Aircraft::all();
        $vuelos = Vuelo::all();
        return view('aircraft.index', compact('aircraft', 'vuelos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'model' => 'required|string|max:255',
            'seats' => 'required|integer|min:1',
            'plate' => 'required|string|unique:aircraft,plate|max:255',
            'type' => 'required|in:narrowBody,wideBody,regional',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'vuelo_id' => 'nullable|exists:vuelos,id',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('aircraft_images', 'public');
            $validated['image'] = $imagePath;
        }

        $aircraft = Aircraft::create($validated);

        if ($request->ajax()) {
            return response()->json($aircraft, 201);
        }

        return redirect()->route('aircraft.index')->with('success', 'Aeronave creada exitosamente.');
    }

    public function update(Request $request, Aircraft $aircraft)
    {
        $validated = $request->validate([
            'model' => 'required|string|max:255',
            'seats' => 'required|integer|min:1',
            'plate' => 'required|string|unique:aircraft,plate,' . $aircraft->id . '|max:255',
            'type' => 'required|in:narrowBody,wideBody,regional',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'vuelo_id' => 'nullable|exists:vuelos,id',
        ]);

        if ($request->hasFile('image')) {
            if ($aircraft->image) {
                Storage::disk('public')->delete($aircraft->image);
            }
            $imagePath = $request->file('image')->store('aircraft_images', 'public');
            $validated['image'] = $imagePath;
        }

        $aircraft->update($validated);

        if ($request->ajax()) {
            return response()->json($aircraft, 200);
        }

        return redirect()->route('aircraft.index')->with('success', 'Aeronave actualizada exitosamente.');
    }

    public function destroy(Aircraft $aircraft)
    {
        if ($aircraft->image) {
            Storage::disk('public')->delete($aircraft->image);
        }

        $aircraft->delete();

        if (request()->ajax()) {
            return response()->json(null, 204);
        }

        return redirect()->route('aircraft.index')->with('success', 'Aeronave eliminada exitosamente.');
    }
}
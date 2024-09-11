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
            'model' => 'required|string|max:255',
            'seats' => 'required|integer|min:1',
            'plate' => 'required|string|unique:aircraft,plate|max:255',
            'type' => 'required|in:narrowBody,wideBody,regional',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Depurar para ver los datos validados
        dd($validated);
    
        // Si pasa la validación, continua con la lógica de almacenamiento
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('aircraft_images', 'public');
            $validated['image'] = $imagePath;
        }
    
        $aircraft = Aircraft::create($validated);
    
        return response()->json($aircraft, 201);
    }
    

    public function update(Request $request, Aircraft $aircraft)
    {
        $validated = $request->validate([
            'model' => 'required|string|max:255',
            'seats' => 'required|integer|min:1',
            'plate' => 'required|string|unique:aircraft,plate,' . $aircraft->id . '|max:255',
            'type' => 'required|in:narrowBody,wideBody,regional',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($aircraft->image) {
                Storage::disk('public')->delete($aircraft->image);
            }
            $imagePath = $request->file('image')->store('aircraft_images', 'public');
            $validated['image'] = $imagePath;
        }

        $aircraft->update($validated);

        return response()->json($aircraft, 200);
    }

    public function destroy(Aircraft $aircraft)
    {
        if ($aircraft->image) {
            Storage::disk('public')->delete($aircraft->image);
        }

        $aircraft->delete();

        return response()->json(null, 204);
    }

    public function fetchLatestAircraft()
    {
        $aircraft = Aircraft::orderBy('created_at', 'desc')->take(6)->get();
        return response()->json($aircraft);
    }
}
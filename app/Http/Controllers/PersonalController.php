<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index()
    {
        $personal = Personal::all();
        return view('personal.index', compact('personal'));
    }

    public function create()
    {
        return view('personal.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'identificacion' => 'required|string|unique:personal',
            'email' => 'required|email|unique:personal',
            'telefono' => 'required|string',
            'idioma' => 'required|string',
            'pais' => 'required|string',
        ]);

        Personal::create($validatedData);

        return redirect()->route('personal.index')->with('success', 'Personal creado exitosamente.');
    }
}
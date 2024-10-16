<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::all();
        return view('reservas.index', compact('reservas'));
    }

    public function create()
    {
        return view('reservas.create');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nombre_cliente' => 'required|string|max:255',
                'email_cliente' => 'required|email|max:255',
                'fecha_inicio' => 'required|date',
                'fecha_fin' => 'required|date|after:fecha_inicio',
                'numero_personas' => 'required|integer|min:1',
            ]);

            $reserva = Reserva::create($validatedData);
            
            \Log::info('Reserva creada: ' . $reserva->id);

            return redirect()->route('reservas.index')->with('success', 'Reserva creada exitosamente.');
        } catch (\Exception $e) {
            \Log::error('Error al crear reserva: ' . $e->getMessage());
            return back()->with('error', 'Error al crear la reserva: ' . $e->getMessage())->withInput();
        }
    }
}
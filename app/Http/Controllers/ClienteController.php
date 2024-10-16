<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nombre' => 'required|string|max:255',
                'apellido' => 'required|string|max:255',
                'documento' => 'required|string|max:20|unique:clientes',
                'destino' => 'required|string|max:255',
            ]);

            $cliente = Cliente::create($validatedData);
            
            \Log::info('Cliente creado: ' . $cliente->id);

            return redirect()->route('clientes.index')->with('success', 'Cliente creado exitosamente.');
        } catch (\Exception $e) {
            \Log::error('Error al crear cliente: ' . $e->getMessage());
            return back()->with('error', 'Error al crear el cliente: ' . $e->getMessage())->withInput();
        }
    }
}
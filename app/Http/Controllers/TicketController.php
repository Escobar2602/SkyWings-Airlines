<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Vuelo;
use App\Models\Aircraft;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        return view('tickets.search');
    }

    public function search(Request $request)
    {
        $validated = $request->validate([
            'origin' => 'required|string',
            'destination' => 'required|string',
            'departure_date' => 'required|date',
            'return_date' => 'nullable|date',
            'adults' => 'required|integer|min:1',
            'children' => 'required|integer|min:0',
        ]);

        $vuelos = Vuelo::where('origen', $validated['origin'])
            ->where('destino', $validated['destination'])
            ->where('dia_salida', $validated['departure_date'])
            ->get();

        $available_flights = [];

        foreach ($vuelos as $vuelo) {
            $aircraft = Aircraft::find($vuelo->aircraft_id);
            $booked_seats = Ticket::where('vuelo_id', $vuelo->id)->count();
            $available_seats = $aircraft->seats - $booked_seats;

            if ($available_seats >= ($validated['adults'] + $validated['children'])) {
                $available_flights[] = [
                    'vuelo' => $vuelo,
                    'available_seats' => $available_seats,
                ];
            }
        }

        return response()->json($available_flights);
    }

    public function book(Request $request)
    {
        $validated = $request->validate([
            'vuelo_id' => 'required|exists:vuelos,id',
            'seat_number' => 'required|integer|min:1',
            'passenger_name' => 'required|string',
        ]);

        $vuelo = Vuelo::findOrFail($validated['vuelo_id']);
        $aircraft = Aircraft::findOrFail($vuelo->aircraft_id);

        if ($validated['seat_number'] > $aircraft->seats) {
            return response()->json(['error' => 'Invalid seat number'], 400);
        }

        $existing_ticket = Ticket::where('vuelo_id', $validated['vuelo_id'])
            ->where('seat_number', $validated['seat_number'])
            ->first();

        if ($existing_ticket) {
            return response()->json(['error' => 'Seat already booked'], 400);
        }

        $ticket = Ticket::create($validated);

        return response()->json($ticket, 201);
    }
}
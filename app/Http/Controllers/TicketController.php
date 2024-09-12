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
        $origins = Vuelo::distinct('origen')->pluck('origen');
        $destinations = Vuelo::distinct('destino')->pluck('destino');
        return view('tickets.search', compact('origins', 'destinations'));
    }

    public function search(Request $request)
    {
        $validated = $request->validate([
            'origin' => 'required|string',
            'destination' => 'required|string',
            'departure_date' => 'required|date',
            'adults' => 'required|integer|min:1',
            'children' => 'required|integer|min:0',
        ]);

        $vuelos = Vuelo::where('origen', $validated['origin'])
            ->where('destino', $validated['destination'])
            ->where('dia_salida', $validated['departure_date'])
            ->with('aircraft')
            ->get();

        $available_flights = [];

        foreach ($vuelos as $vuelo) {
            $booked_seats = Ticket::where('vuelo_id', $vuelo->id)->pluck('seat_number')->toArray();
            $available_seats = range(1, $vuelo->aircraft->seats);
            $available_seats = array_diff($available_seats, $booked_seats);

            if (count($available_seats) >= ($validated['adults'] + $validated['children'])) {
                $available_flights[] = [
                    'vuelo' => $vuelo,
                    'available_seats' => $available_seats,
                ];
            }
        }

        return response()->json($available_flights);
    }

    public function getSeats(Request $request, Vuelo $vuelo)
    {
        $booked_seats = Ticket::where('vuelo_id', $vuelo->id)->pluck('seat_number')->toArray();
        $all_seats = range(1, $vuelo->aircraft->seats);
        $available_seats = array_values(array_diff($all_seats, $booked_seats));

        return response()->json([
            'total_seats' => $vuelo->aircraft->seats,
            'booked_seats' => $booked_seats,
            'available_seats' => $available_seats,
        ]);
    }

    public function book(Request $request)
    {
        $validated = $request->validate([
            'vuelo_id' => 'required|exists:vuelos,id',
            'seat_numbers' => 'required|array',
            'seat_numbers.*' => 'required|integer|min:1',
            'passenger_names' => 'required|array',
            'passenger_names.*' => 'required|string',
        ]);

        $vuelo = Vuelo::findOrFail($validated['vuelo_id']);
        
        // Verificar que los asientos estén disponibles
        $booked_seats = Ticket::where('vuelo_id', $vuelo->id)
            ->whereIn('seat_number', $validated['seat_numbers'])
            ->exists();

        if ($booked_seats) {
            return response()->json(['error' => 'Uno o más asientos seleccionados ya están reservados'], 400);
        }

        $tickets = [];
        foreach ($validated['seat_numbers'] as $index => $seat_number) {
            $tickets[] = Ticket::create([
                'vuelo_id' => $vuelo->id,
                'seat_number' => $seat_number,
                'passenger_name' => $validated['passenger_names'][$index],
            ]);
        }

        return response()->json($tickets, 201);
    }
}
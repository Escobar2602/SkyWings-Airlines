<x-app-layout>
    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:p-8">
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-6">Buscar Vuelos</h2>
                    <form id="flightSearchForm" class="space-y-6">
                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-2">
                            <div>
                                <label for="origin" class="block text-sm font-medium text-gray-700">Origen</label>
                                <select id="origin" name="origin" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    @foreach($origins as $origin)
                                        <option value="{{ $origin }}">{{ $origin }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="destination" class="block text-sm font-medium text-gray-700">Destino</label>
                                <select id="destination" name="destination" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                    @foreach($destinations as $destination)
                                        <option value="{{ $destination }}">{{ $destination }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="departure_date" class="block text-sm font-medium text-gray-700">Fecha de Salida</label>
                                <input type="date" name="departure_date" id="departure_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="return_date" class="block text-sm font-medium text-gray-700">Fecha de Regreso (Opcional)</label>
                                <input type="date" name="return_date" id="return_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="adults" class="block text-sm font-medium text-gray-700">Adultos</label>
                                <input type="number" name="adults" id="adults" min="1" value="1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div>
                                <label for="children" class="block text-sm font-medium text-gray-700">Niños</label>
                                <input type="number" name="children" id="children" min="0" value="0" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Buscar Vuelos
                            </button>
                        </div>
                    </form>
                    <div id="searchResults" class="mt-8"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('flightSearchForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            fetch('/tickets/search', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                const resultsDiv = document.getElementById('searchResults');
                resultsDiv.innerHTML = '';
                if (data.length === 0) {
                    resultsDiv.innerHTML = '<p class="text-red-500 text-center">No se encontraron vuelos disponibles.</p>';
                } else {
                    const resultsGrid = document.createElement('div');
                    resultsGrid.className = 'grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3';
                    data.forEach(flight => {
                        const flightCard = document.createElement('div');
                        flightCard.className = 'bg-white overflow-hidden shadow rounded-lg';
                        flightCard.innerHTML = `
                            <div class="px-4 py-5 sm:p-6">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">${flight.vuelo.origen} a ${flight.vuelo.destino}</h3>
                                <div class="mt-2 max-w-xl text-sm text-gray-500">
                                    <p>Fecha: ${flight.vuelo.dia_salida}</p>
                                    <p>Salida: ${flight.vuelo.hora_salida}</p>
                                    <p>Llegada: ${flight.vuelo.hora_llegada}</p>
                                    <p>Asientos disponibles: ${flight.available_seats.length}</p>
                                </div>
                                <div class="mt-3">
                                    <button onclick="selectSeats(${flight.vuelo.id})" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Seleccionar Asientos
                                    </button>
                                </div>
                            </div>
                        `;
                        resultsGrid.appendChild(flightCard);
                    });
                    resultsDiv.appendChild(resultsGrid);
                }
            });
        });

        function selectSeats(vueloId) {
            fetch(`/tickets/seats/${vueloId}`, {
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                const modal = document.createElement('div');
                modal.className = 'fixed z-10 inset-0 overflow-y-auto';
                modal.innerHTML = `
                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Selecciona tus asientos</h3>
                                <div id="seatMap" class="grid grid-cols-6 gap-2 mb-4"></div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                <button id="confirmSeats" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                                    Confirmar Selección
                                </button>
                                <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" onclick="this.closest('.fixed').remove()">
                                    Cancelar
                                </button>
                            </div>
                        </div>
                    </div>
                `;

                document.body.appendChild(modal);

                const seatMap = document.getElementById('seatMap');
                for (let i = 1; i <= data.total_seats; i++) {
                    const seat = document.createElement('div');
                    if (data.booked_seats.includes(i)) {
                        seat.className = 'p-2 text-center bg-gray-300 rounded';
                    } else {
                        seat.className = 'p-2 text-center cursor-pointer bg-green-200 hover:bg-green-300 rounded';
                        seat.onclick = function() {
                            this.classList.toggle('bg-indigo-500');
                            this.classList.toggle('text-white');
                        };
                    }
                    seat.textContent = i;
                    seatMap.appendChild(seat);
                }

                document.getElementById('confirmSeats').onclick = function() {
                    const selectedSeats = Array.from(document.querySelectorAll('#seatMap .bg-green-500')).map(seat => parseInt(seat.textContent));
                    if (selectedSeats.length === 0) {
                        alert('Por favor, selecciona al menos un asiento.');
                        return;
                    }
                    bookTickets(vueloId, selectedSeats);
                    document.body.removeChild(modal);
                };
            });
        }

        function bookTickets(vueloId, seatNumbers) {
            const passengerNames = [];
            for (let i = 0; i < seatNumbers.length; i++) {
                const name = prompt(`Nombre del pasajero para el asiento ${seatNumbers[i]}:`);
                if (name) {
                    passengerNames.push(name);
                } else {
                    alert('Debe proporcionar un nombre para cada pasajero.');
                    return;
                }
            }

            fetch('/tickets/book', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    vuelo_id: vueloId,
                    seat_numbers: seatNumbers,
                    passenger_names: passengerNames
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert(data.error);
                } else {
                    alert('Tickets reservados exitosamente!');
                    // Aquí puedes redirigir al usuario a una página de confirmación o actualizar la vista actual
                }
            });
        }
    </script>
</x-app-layout>
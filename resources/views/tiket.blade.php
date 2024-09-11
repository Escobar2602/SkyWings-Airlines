<x-app-layout>
    <body class="bg-gray-100">
        <div class="flex flex-col items-center justify-center min-h-screen">
            <!-- Image banner section -->
            <div class="relative w-full bg-center bg-cover h-96"
                style="background-image: url('/images/614784_fastest_private_jet_banner_tcm71-45564.jpg');">
                <div class="absolute inset-0 bg-black opacity-50"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <h1 class="text-4xl font-bold text-center text-white">Encuentra tu próximo destino</h1>
                </div>
            </div>

            <!-- Form section -->
            <section class="flex justify-center w-full py-16 bg-white">
                <div class="w-full px-8 py-8 bg-white rounded-lg shadow-xl max-w-7xl">
                    <h2 class="mb-8 text-3xl font-bold text-center text-gray-800">Busca tu vuelo ideal</h2>
                    <form id="flightSearchForm" class="flex flex-col space-y-6">
                        <!-- Trip Type Buttons -->
                        <div class="flex justify-center mb-6 space-x-4">
                            <button
                                id="roundTrip"
                                class="px-6 py-2 font-medium text-white transition duration-300 bg-purple-600 rounded-full focus:outline-none hover:bg-purple-700"
                                type="button"
                                onclick="setTripType('roundTrip')">
                                Ida y vuelta
                            </button>
                            <button
                                id="oneWay"
                                class="px-6 py-2 font-medium text-gray-800 transition duration-300 bg-gray-200 rounded-full focus:outline-none hover:bg-purple-100"
                                type="button"
                                onclick="setTripType('oneWay')">
                                Solo ida
                            </button>
                            <button
                                id="multiDestination"
                                class="px-6 py-2 font-medium text-gray-800 transition duration-300 bg-gray-200 rounded-full focus:outline-none hover:bg-purple-100"
                                type="button"
                                onclick="setTripType('multiDestination')">
                                Multidestino
                            </button>
                        </div>

                        <!-- Input Fields with Icons -->
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="flex items-center p-2 border border-gray-300 rounded-md focus-within:ring-2 focus-within:ring-purple-500">
                                <svg class="w-6 h-6 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5h2l.402 2H20a1 1 0 01.993.883L21 8v10a1 1 0 01-.883.993L20 19H7a1 1 0 01-.993-.883L6 18H4a1 1 0 01-.993-.883L3 5zm14 2h2m-2 4h2m-6 0h.01M10 8h.01M10 12h.01M10 16h.01">
                                    </path>
                                </svg>
                                <input type="text" placeholder="Origen" id="origin"
                                    class="w-full outline-none focus:ring-0" required>
                            </div>
                            <div class="flex items-center p-2 border border-gray-300 rounded-md focus-within:ring-2 focus-within:ring-purple-500">
                                <svg class="w-6 h-6 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5h2l.402 2H20a1 1 0 01.993.883L21 8v10a1 1 0 01-.883.993L20 19H7a1 1 0 01-.993-.883L6 18H4a1 1 0 01-.993-.883L3 5zm14 2h2m-2 4h2m-6 0h.01M10 8h.01M10 12h.01M10 16h.01">
                                    </path>
                                </svg>
                                <input type="text" placeholder="Destino" id="destination"
                                    class="w-full outline-none focus:ring-0" required>
                            </div>
                        </div>

                        <!-- Date Fields -->
                        <div id="dateFields" class="grid grid-cols-2 gap-4 mb-4">
                            <div class="flex items-center p-2 border border-gray-300 rounded-md focus-within:ring-2 focus-within:ring-purple-500">
                                <svg class="w-6 h-6 mr-2 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-6 8v6m4-6v6M5 10h14"></path>
                                </svg>
                                <input type="date" id="departureDate" class="w-full outline-none focus:ring-0" required>
                            </div>
                            <div class="flex items-center p-2 border border-gray-300 rounded-md focus-within:ring-2 focus-within:ring-purple-500" id="returnDateField">
                                <svg class="w-6 h-6 mr-2 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-6 8v6m4-6v6M5 10h14"></path>
                                </svg>
                                <input type="date" id="returnDate" class="w-full outline-none focus:ring-0">
                            </div>
                        </div>

                        <!-- Passenger Count -->
                        <div class="flex items-center mb-6 space-x-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Adultos</label>
                                <div class="flex items-center mt-1">
                                    <button type="button" class="px-2 py-1 bg-gray-200 rounded-l hover:bg-gray-300"
                                        onclick="updatePassengerCount('adults', -1)">-</button>
                                    <span id="adultsCount" class="px-4 py-1 bg-gray-100">1</span>
                                    <button type="button" class="px-2 py-1 bg-gray-200 rounded-r hover:bg-gray-300"
                                        onclick="updatePassengerCount('adults', 1)">+</button>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Menores</label>
                                <div class="flex items-center mt-1">
                                    <button type="button" class="px-2 py-1 bg-gray-200 rounded-l hover:bg-gray-300"
                                        onclick="updatePassengerCount('children', -1)">-</button>
                                    <span id="childrenCount" class="px-4 py-1 bg-gray-100">0</span>
                                    <button type="button" class="px-2 py-1 bg-gray-200 rounded-r hover:bg-gray-300"
                                        onclick="updatePassengerCount('children', 1)">+</button>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full py-2 text-white transition duration-300 bg-purple-600 rounded-md hover:bg-purple-700">
                            Buscar vuelos
                        </button>
                    </form>
                </div>
            </section>
        </div>

        <script>
            // Set default trip type
            let tripType = 'roundTrip';

            function setTripType(type) {
                tripType = type;
                document.getElementById('roundTrip').classList.toggle('bg-purple-600', type === 'roundTrip');
                document.getElementById('roundTrip').classList.toggle('bg-gray-200', type !== 'roundTrip');
                document.getElementById('oneWay').classList.toggle('bg-purple-600', type === 'oneWay');
                document.getElementById('oneWay').classList.toggle('bg-gray-200', type !== 'oneWay');
                document.getElementById('multiDestination').classList.toggle('bg-purple-600', type === 'multiDestination');
                document.getElementById('multiDestination').classList.toggle('bg-gray-200', type !== 'multiDestination');

                // Show or hide return date based on trip type
                document.getElementById('returnDateField').style.display = type === 'roundTrip' ? 'block' : 'none';
            }

            // Update passenger count
            function updatePassengerCount(type, change) {
                const countElement = document.getElementById(`${type}Count`);
                let currentCount = parseInt(countElement.textContent);
                currentCount = Math.max(0, currentCount + change);
                countElement.textContent = currentCount;
            }

            // Set minimum date for departure and return
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('departureDate').min = today;
            document.getElementById('returnDate').min = today;

            // Update return date min when departure date changes
            document.getElementById('departureDate').addEventListener('change', function () {
                document.getElementById('returnDate').min = this.value;
            });

            // Handle form submission
            document.getElementById('flightSearchForm').addEventListener('submit', function (e) {
                e.preventDefault();

                const origin = document.getElementById('origin').value;
                const destination = document.getElementById('destination').value;
                const departureDate = document.getElementById('departureDate').value;
                const returnDate = document.getElementById('returnDate').value;
                const adults = document.getElementById('adultsCount').textContent;
                const children = document.getElementById('childrenCount').textContent;

                console.log('Búsqueda de vuelo:', {
                    origin,
                    destination,
                    departureDate,
                    returnDate,
                    adults,
                    children
                });

                alert(
                    `Buscando vuelos de ${origin} a ${destination}.\nIda: ${departureDate}${tripType === 'roundTrip' && returnDate ? `\nVuelta: ${returnDate}` : ''}\nAdultos: ${adults}, Menores: ${children}`);
            });

            // Initialize the trip type
            setTripType('roundTrip');
        </script>
    </body>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<x-app-layout>
    <div class="min-h-screen bg-gray-100">
        <header class="bg-white shadow">
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
                <p class="mt-2 text-sm text-gray-600">
                Última actualización: <span id="current-time" class="font-semibold"></span>
                </p>
            </div>
        </header>

        <main class="py-10">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- KPI Cards -->
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <h2 class="mb-4 text-xl font-semibold text-gray-800">Total de vuelos</h2>
                        <p class="text-4xl font-bold text-blue-600">1,284</p>
                        <p class="mt-2 text-sm text-green-600">↑ 7% Desde el mes pasado</p>
                        <div class="mt-4 h-2 bg-gray-200 rounded-full">
                            <div class="h-2 bg-blue-600 rounded-full" style="width: 70%"></div>
                        </div>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <h2 class="mb-4 text-xl font-semibold text-gray-800">Aeronave activa</h2>
                        <p class="text-4xl font-bold text-green-600">42</p>
                        <p class="mt-2 text-sm text-gray-600">Última actualización hace 2 horas</p>
                        <div class="mt-4 grid grid-cols-6 gap-1">
                            <div class="h-4 bg-green-500 rounded"></div>
                            <div class="h-4 bg-green-500 rounded"></div>
                            <div class="h-4 bg-green-500 rounded"></div>
                            <div class="h-4 bg-green-500 rounded"></div>
                            <div class="h-4 bg-gray-300 rounded"></div>
                            <div class="h-4 bg-gray-300 rounded"></div>
                        </div>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <h2 class="mb-4 text-xl font-semibold text-gray-800">Rendimiento puntual</h2>
                        <p class="text-4xl font-bold text-purple-600">92%</p>
                        <p class="mt-2 text-sm text-green-600">↑ 3% Desde la semana pasada</p>
                        <div class="mt-4 relative pt-1">
                            <div class="flex mb-2 items-center justify-between">
                                <div>
                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-purple-600 bg-purple-200">
                                        Task in progress
                                    </span>
                                </div>
                                <div class="text-right">
                                    <span class="text-xs font-semibold inline-block text-purple-600">
                                        92%
                                    </span>
                                </div>
                            </div>
                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-purple-200">
                                <div style="width: 92%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Weather Widget -->
                    <div class="col-span-full p-6 bg-white rounded-lg shadow-lg">
                        <h2 class="mb-4 text-xl font-semibold text-gray-800">El tiempo en los principales centros de operaciones</h2>
                        <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-5" id="weather-container">
                            <!-- Weather data will be dynamically inserted here -->
                        </div>
                    </div>

                    <!-- Revenue Chart -->
                    <div class="col-span-full md:col-span-2 p-6 bg-white rounded-lg shadow-lg">
    <h2 class="mb-4 text-xl font-semibold text-gray-800">Ingresos mensuales</h2>
    <div class="relative">
        <canvas id="revenue-chart" class="w-full h-48"></canvas>
    </div>
</div>
<script>
    var ctx = document.getElementById('revenue-chart').getContext('2d');
var revenueChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
        datasets: [{
            label: 'Ingresos (USD)',
            data: [12000, 15000, 10000, 18000, 20000, 23000],
            backgroundColor: 'rgba(75, 192, 192, 0.6)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false, // Evita que el gráfico se expanda fuera de su div
        animation: {
            duration: 1000,
            easing: 'easeInOutQuart'
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

</script>

<div class="md:col-span-1 p-6 bg-white rounded-lg shadow-lg">
    <h2 class="mb-4 text-xl font-semibold text-gray-800">Rutas de vuelo populares</h2>
    <div class="relative">
        <canvas id="flight-routes-chart" class="w-full h-48"></canvas>
    </div>
</div>
<script>
    var ctx2 = document.getElementById('flight-routes-chart').getContext('2d');
var flightRoutesChart = new Chart(ctx2, {
    type: 'pie',
    data: {
        labels: ['NYC - LA', 'SF - Chicago', 'Miami - Houston', 'LA - Dallas'],
        datasets: [{
            label: 'Popularidad de Rutas',
            data: [25, 15, 35, 25],
            backgroundColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false, // Evita que el gráfico se expanda fuera de su div
        animation: {
            duration: 1500,
            easing: 'easeInOutBounce'
        }
    }
});

</script>


                    <!-- Recent Flights Table -->
                    <div class="col-span-full p-6 bg-white rounded-lg shadow-lg">
                        <h2 class="mb-4 text-xl font-semibold text-gray-800">Vuelos recientes</h2>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left table-auto">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="p-3 font-semibold">N.º de vuelo</th>
                                        <th class="p-3 font-semibold">Desde</th>
                                        <th class="p-3 font-semibold">Hasta</th>
                                        <th class="p-3 font-semibold">Salida</th>
                                        <th class="p-3 font-semibold">Estado</th>
                                    </tr>
                                </thead>
                                <tbody id="flights-table-body">
                                    <!-- Flight data will be dynamically inserted here -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Fuel Prices Widget -->
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <h2 class="mb-4 text-xl font-semibold text-gray-800">Precios del combustible</h2>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Jet A1:</span>
                                <span class="font-semibold text-lg" id="jet-a1-price">$2.15/galon</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Avgas:</span>
                                <span class="font-semibold text-lg" id="avgas-price">$5.20/galon</span>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-gray-500">Última actualización: <span id="fuel-update-time">Hace 2 horas</span></p>
                        <div class="mt-4 h-2 bg-gray-200 rounded-full">
                            <div class="h-2 bg-yellow-400 rounded-full transition-all duration-1000" style="width: 0%" id="fuel-price-indicator"></div>
                        </div>
                    </div>

                    <!-- Upcoming Maintenance -->
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <h2 class="mb-4 text-xl font-semibold text-gray-800">Mantenimiento próximo</h2>
                        <ul class="space-y-3" id="maintenance-list">
                            <!-- Maintenance data will be dynamically inserted here -->
                        </ul>
                    </div>

                    <!-- Flight Delay Prediction -->
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <h2 class="mb-4 text-xl font-semibold text-gray-800">Predicción de retrasos en vuelos</h2>
                        <div class="flex items-center justify-center">
                            <div class="relative w-32 h-32">
                                <svg class="w-full h-full" viewBox="0 0 100 100">
                                    <circle class="text-gray-200 stroke-current" stroke-width="10" cx="50" cy="50" r="40" fill="transparent"></circle>
                                    <circle class="text-blue-500 progress-ring stroke-current" stroke-width="10" cx="50" cy="50" r="40" fill="transparent" transform="rotate(-90 50 50)"></circle>
                                    <text x="50" y="50" font-family="Verdana" font-size="12" text-anchor="middle" alignment-baseline="middle" id="delay-probability">75%</text>
                                </svg>
                            </div>
                        </div>
                        <p class="mt-4 text-center text-sm text-gray-600">Probabilidad de retrasos en la próxima hora</p>
                    </div>
                </div>
            </div>
        </main>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Update current time
        function updateCurrentTime() {
            const now = new Date();
            document.getElementById('current-time').textContent = now.toLocaleString();
        }
        setInterval(updateCurrentTime, 1000);
        updateCurrentTime();

        // Weather data
        const weatherData = [
            { city: 'New York', temperature: 22, condition: 'Partly Cloudy', precipitation: 20 },
            { city: 'London', temperature: 18, condition: 'Light Rain', precipitation: 60 },
            { city: 'Tokyo', temperature: 28, condition: 'Sunny', precipitation: 0 },
            { city: 'Sydney', temperature: 25, condition: 'Windy', precipitation: 10 },
            { city: 'Dubai', temperature: 35, condition: 'Sunny', precipitation: 0 },
        ];

        const weatherIcons = {
            'Partly Cloudy': '🌤️',
            'Sunny': '☀️',
            'Light Rain': '🌧️',
            'Windy': '💨',
        };

        const weatherContainer = document.getElementById('weather-container');
        weatherData.forEach(({ city, temperature, condition, precipitation }) => {
            const weatherCard = document.createElement('div');
            weatherCard.className = 'p-4 text-center bg-gray-50 rounded-lg shadow';
            weatherCard.innerHTML = `
                <h3 class="mb-2 text-lg font-semibold">${city}</h3>
                <p class="text-4xl mb-2">${weatherIcons[condition]}</p>
                <p class="text-2xl font-bold">${temperature}°C</p>
                <p class="text-sm text-gray-600">${condition}</p>
                <p class="text-sm text-blue-600">${precipitation}% precip.</p>
            `;
            weatherContainer.appendChild(weatherCard);
        });

        // Revenue Chart
        const revenueData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Revenue',
                data: [650000, 590000, 800000, 810000, 560000, 550000, 400000, 580000, 630000, 800000, 680000, 810000],
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        };

        new Chart(document.getElementById('revenue-chart'), {
            type: 'line',
            data: revenueData,
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // Flight Routes Chart
        const flightRoutesData = {
            labels: ['NYC-LON', 'LON-PAR', 'PAR-DXB', 'DXB-TOK', 'TOK-SYD'],
            datasets: [{
                label: 'Passengers',
                data: [4500, 3200, 3800, 4200, 3600],
                backgroundColor: 'rgba(255, 99, 132, 0.5)'
            }]
        };

        new Chart(document.getElementById('flight-routes-chart'), {
            type: 'bar',
            data: flightRoutesData,
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // Recent Flights Table
        const flightsData = [
            { flightNo: 'FL1234', from: 'New York (JFK)', to: 'London (LHR)', departure: '2023-09-23 08:30 AM', status: 'A tiempo' },
            { flightNo: 'FL5678', from: 'Los Angeles (LAX)', to: 'Tokyo (NRT)', departure: '2023-09-23 11:45 AM', status: 'Retraso' },
            { flightNo: 'FL9012', from: 'Paris (CDG)', to: 'Dubai (DXB)', departure: '2023-09-23 02:15 PM', status: 'Embarque' },
            { flightNo: 'FL3456', from: 'Sydney (SYD)', to: 'Singapore (SIN)', departure: '2023-09-23 09:00 PM', status: 'Programado' },
            { flightNo: 'FL7890', from: 'Amsterdam (AMS)', to: 'Barcelona (BCN)', departure: '2023-09-23 06:45 AM', status: 'Salió' },
        ];

        const flightsTableBody = document.getElementById('flights-table-body');
        flightsData.forEach(({ flightNo, from, to, departure, status }) => {
            const row = document.createElement('tr');
            row.className = 'border-b border-gray-200';
            row.innerHTML = `
                <td class="p-3">${flightNo}</td>
                <td class="p-3">${from}</td>
                <td class="p-3">${to}</td>
                <td class="p-3">${departure}</td>
                <td class="p-3">
                    <span class="px-2 py-1 text-xs text-white rounded-full ${getStatusColor(status)}">
                        ${status}
                    </span>
                </td>
            `;
            flightsTableBody.appendChild(row);
        });

        function getStatusColor(status) {
            switch (status) {
                case 'A tiempo': return 'bg-green-500';
                case 'Retraso': return 'bg-yellow-500';
                case 'Embarque': return 'bg-blue-500';
                case 'Programado': return 'bg-purple-500';
                default: return 'bg-gray-500';
            }
        }

        // Fuel Prices
        function updateFuelPrices() {
            const jetA1Price = (Math.random() * (2.50 - 2.00) + 2.00).toFixed(2);
            const avgasPrice = (Math.random() * (5.50 - 5.00) + 5.00).toFixed(2);

            document.getElementById('jet-a1-price').textContent = `$${jetA1Price}/galon`;
            document.getElementById('avgas-price').textContent = `$${avgasPrice}/galon`;

            const now = new Date();
            document.getElementById('fuel-update-time').textContent = `${now.toLocaleTimeString()}`;

            const indicator = document.getElementById('fuel-price-indicator');
            const width = (jetA1Price - 2.00) / (2.50 - 2.00) * 100;
            indicator.style.width = `${width}%`;
        }
        setInterval(updateFuelPrices, 5000);
        updateFuelPrices();

        // Upcoming Maintenance
        const maintenanceData = [
            { aircraft: 'A320 (N123AA)', due: '2 dias', urgency: 'high' },
            { aircraft: 'B737 (N456BB)', due: '7 dias', urgency: 'medium' },
            { aircraft: 'A330 (N789CC)', due: '14 dias', urgency: 'low' },
        ];

        const maintenanceList = document.getElementById('maintenance-list');
        maintenanceData.forEach(({ aircraft, due, urgency }) => {
            const li = document.createElement('li');
            li.className = 'flex justify-between items-center';
            li.innerHTML = `
                <span class="text-sm text-gray-600">${aircraft}</span>
                <span class="text-sm font-semibold ${getUrgencyColor(urgency)}">Due in ${due}</span>
            `;
            maintenanceList.appendChild(li);
        });

        function getUrgencyColor(urgency) {
            switch (urgency) {
                case 'high': return 'text-red-500';
                case 'medium': return 'text-yellow-500';
                case 'low': return 'text-green-500';
                default: return 'text-gray-500';
            }
        }

        // Flight Delay Prediction
        function updateDelayPrediction() {
            const probability = Math.floor(Math.random() * 100);
            const circle = document.querySelector('.progress-ring');
            const radius = circle.r.baseVal.value;
            const circumference = radius * 2 * Math.PI;

            circle.style.strokeDasharray = `${circumference} ${circumference}`;
            circle.style.strokeDashoffset = circumference;

            const offset = circumference - (probability / 100) * circumference;
            circle.style.strokeDashoffset = offset;

            document.getElementById('delay-probability').textContent = `${probability}%`;
        }
        setInterval(updateDelayPrediction, 10000);
        updateDelayPrediction();

    </script>
</x-app-layout>

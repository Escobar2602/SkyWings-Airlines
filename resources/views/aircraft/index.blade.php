<!-- resources/views/airplanes/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registro de Aviones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                @if (session('success'))
                    <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">¡Éxito!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

<<<<<<< HEAD
                <form action="{{ route('airplanes.store') }}" method="POST" enctype="multipart/form-data" class="mb-8">
=======
                <!-- Formulario para agregar aeronave -->
                <form id="aircraftForm" class="mb-8">
>>>>>>> d8d5a5630bd7c65f422ae6515df935415da1f37a
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="model" class="block mb-2">Modelo de Avión</label>
                            <input type="text" name="model" id="model" class="w-full border-gray-300 rounded-md" required>
                        </div>
                        <div>
                            <label for="seats" class="block mb-2">Número de Asientos</label>
                            <input type="number" name="seats" id="seats" class="w-full border-gray-300 rounded-md" required>
                        </div>
                        <div>
                            <label for="plate" class="block mb-2">Placa</label>
                            <input type="text" name="plate" id="plate" class="w-full border-gray-300 rounded-md" required>
                        </div>
                        <div>
                            <label for="type" class="block mb-2">Tipo de Avión</label>
                            <select name="type" id="type" class="w-full border-gray-300 rounded-md" required>
                                <option value="">Seleccione un tipo</option>
                                <option value="narrowBody">Fuselaje Estrecho</option>
                                <option value="wideBody">Fuselaje Ancho</option>
                                <option value="regional">Regional</option>
                            </select>
                        </div>
<<<<<<< HEAD
                        <div>
                            <label for="image" class="block mb-2">Imagen del Avión</label>
                            <input type="file" name="image" id="image" class="w-full border-gray-300 rounded-md">
                        </div>
=======
>>>>>>> d8d5a5630bd7c65f422ae6515df935415da1f37a
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Registrar Avión</button>
                    </div>
                </form>

                <h3 class="text-lg font-semibold mb-4">Lista de Aviones Registrados</h3>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Modelo</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Asientos</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Placa</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tipo</th>
<<<<<<< HEAD
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Imagen</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($airplanes as $airplane)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $airplane->model }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $airplane->seats }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $airplane->plate }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $airplane->type }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($airplane->image)
                                        <img src="{{ asset('storage/' . $airplane->image) }}" alt="Imagen del avión" class="w-20 h-20 object-cover">
                                    @else
                                        Sin imagen
                                    @endif
                                </td>
                            </tr>
=======
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="aircraftTableBody" class="bg-white divide-y divide-gray-200">
                        @foreach ($aircraft as $plane)
                        <tr data-id="{{ $plane->id }}">
                            <td class="px-6 py-4 whitespace-nowrap">{{ $plane->model }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $plane->seats }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $plane->plate }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $plane->type }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button onclick="editAircraft({{ $plane->id }})" class="text-indigo-600 hover:text-indigo-900 mr-2">Editar</button>
                                <button onclick="deleteAircraft({{ $plane->id }})" class="text-red-600 hover:text-red-900">Eliminar</button>
                            </td>
                        </tr>
>>>>>>> d8d5a5630bd7c65f422ae6515df935415da1f37a
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</x-app-layout>
=======

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('aircraftForm');
            const tableBody = document.getElementById('aircraftTableBody');

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(form);
                fetch('/aircraft', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    addAircraftToTable(data);
                    form.reset();
                })
                .catch(error => console.error('Error:', error));
            });

            function addAircraftToTable(aircraft) {
                const row = document.createElement('tr');
                row.setAttribute('data-id', aircraft.id);
                row.innerHTML = `
                    <td class="px-6 py-4 whitespace-nowrap">${aircraft.model}</td>
                    <td class="px-6 py-4 whitespace-nowrap">${aircraft.seats}</td>
                    <td class="px-6 py-4 whitespace-nowrap">${aircraft.plate}</td>
                    <td class="px-6 py-4 whitespace-nowrap">${aircraft.type}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <button onclick="editAircraft(${aircraft.id})" class="text-indigo-600 hover:text-indigo-900 mr-2">Editar</button>
                        <button onclick="deleteAircraft(${aircraft.id})" class="text-red-600 hover:text-red-900">Eliminar</button>
                    </td>
                `;
                tableBody.appendChild(row);
            }

            window.editAircraft = function(id) {
                console.log('Editar aeronave con ID:', id);
            }

            window.deleteAircraft = function(id) {
                if (confirm('¿Estás seguro de que quieres eliminar esta aeronave?')) {
                    fetch(`/aircraft/${id}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                    .then(response => {
                        if (response.ok) {
                            document.querySelector(`tr[data-id="${id}"]`).remove();
                        } else {
                            throw new Error('Error al eliminar la aeronave');
                        }
                    })
                    .catch(error => console.error('Error:', error));
                }
            }
        });
    </script>
    @endpush
</x-app-layout>
>>>>>>> d8d5a5630bd7c65f422ae6515df935415da1f37a

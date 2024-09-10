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

                <form action="{{ route('airplanes.store') }}" method="POST" enctype="multipart/form-data" class="mb-8">
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
                        <div>
                            <label for="image" class="block mb-2">Imagen del Avión</label>
                            <input type="file" name="image" id="image" class="w-full border-gray-300 rounded-md">
                        </div>
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
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
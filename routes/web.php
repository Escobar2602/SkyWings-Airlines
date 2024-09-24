<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\rvuelosController;
use App\Http\Controllers\soporteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvionController;
use App\Http\Controllers\RutasYTarifasController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AeropuertoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TripulacionController;
use App\Http\Controllers\VueloController;
use App\Http\Controllers\ReservaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación. Estas
| rutas son cargadas por el RouteServiceProvider dentro de un grupo que
| contiene el grupo de middleware "web".
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Dashboard protegido por middleware de autenticación y verificación de email
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grupo de rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    // Perfil de usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Gestión de aviones (AvionController)
    Route::get('/aircraft', [AvionController::class, 'index'])->name('aircraft.index');
    Route::post('/aircraft', [AvionController::class, 'store'])->name('aircraft.store');
    Route::put('/aircraft/{aircraft}', [AvionController::class, 'update'])->name('aircraft.update');
    Route::delete('/aircraft/{aircraft}', [AvionController::class, 'destroy'])->name('aircraft.destroy');
    Route::get('/api/latest-aircraft', [AvionController::class, 'fetchLatestAircraft'])->name('latest-aircraft');
    Route::get('/crearrutas', [rvuelosController::class, 'index'])->name('rutas');
    Route::get('/soporte', [soporteController::class, 'index'])->name('soporte');
    Route::get('/crearaviones', [AvionController::class, 'index'])->name('aviones');
    Route::resource('aircraft', AvionController::class);
});

Route::get('/tickets/search', [TicketController::class, 'index'])->name('tickets.search');
// Otras rutas (sin autenticación requerida)

Route::middleware(['auth'])->group(function () {
    Route::get('/rutasytarifas', [RutasYTarifasController::class, 'index'])->name('rutasytarifas.index');
    Route::get('/rutasytarifas/create', [RutasYTarifasController::class, 'create'])->name('rutasytarifas.create');
    Route::post('/rutasytarifas', [RutasYTarifasController::class, 'store'])->name('rutasytarifas.store');
});


//rutas del welcome
Route::get('/destinos', function () { return view('destino');});
Route::get('/reseervas', function () { return view('reseervas');});
Route::get('/Checkin', function () { return view('Checkin');});
Route::get('/ayudawelcome', function () { return view('ayudawelcome');});


//rutas de personas
Route::get('/personal', [PersonalController::class, 'index'])->name('personal.index');
Route::get('/personal/create', [PersonalController::class, 'create'])->name('personal.create');
Route::post('/personal', [PersonalController::class, 'store'])->name('personal.store');

//rutas para aerepuertos
Route::get('/aeropuertos', [AeropuertoController::class, 'index'])->name('aeropuertos.index');
Route::get('/aeropuertos/create', [AeropuertoController::class, 'create'])->name('aeropuertos.create');
Route::post('/aeropuertos', [AeropuertoController::class, 'store'])->name('aeropuertos.store');


//rutas de clientes
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');

//rutas de Tripulacion
Route::get('/tripulacion', [TripulacionController::class, 'index'])->name('tripulacion.index');
Route::get('/tripulacion/create', [TripulacionController::class, 'create'])->name('tripulacion.create');
Route::post('/tripulacion', [TripulacionController::class, 'store'])->name('tripulacion.store');


//ruta de Vuelo
Route::get('/vuelos', [VueloController::class, 'index'])->name('vuelos.index');
Route::get('/vuelos/create', [VueloController::class, 'create'])->name('vuelos.create');
Route::post('/vuelos', [VueloController::class, 'store'])->name('vuelos.store');


//ruta de reserva
Route::get('/reservas', [ReservaController::class, 'index'])->name('reservas.index');
Route::get('/reservas/create', [ReservaController::class, 'create'])->name('reservas.create');
Route::post('/reservas', [ReservaController::class, 'store'])->name('reservas.store');


// Rutas de autenticación generadas automáticamente
require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\rvuelosController;
use App\Http\Controllers\tiketController;
use App\Http\Controllers\soporteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AircraftController;
use App\Http\Controllers\VueloController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Estas son las rutas web de la aplicación. Todas están cargadas por
| el RouteServiceProvider y pertenecen al grupo "web" middleware.
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

    // Gestión de aviones (AircraftController)
    Route::get('/aircraft', [AircraftController::class, 'index'])->name('aircraft.index');
    Route::post('/aircraft', [AircraftController::class, 'store'])->name('aircraft.store');
    Route::put('/aircraft/{aircraft}', [AircraftController::class, 'update'])->name('aircraft.update');
    Route::delete('/aircraft/{aircraft}', [AircraftController::class, 'destroy'])->name('aircraft.destroy');
    Route::get('/api/latest-aircraft', [AircraftController::class, 'fetchLatestAircraft'])->name('latest-aircraft');
});

// Otras rutas (sin autenticación requerida)

Route::get('/crearrutas', [rvuelosController::class, 'index'])->name('rutas');
Route::get('/tiket', [tiketController::class, 'index'])->name('tiket');
Route::get('/soporte', [soporteController::class, 'index'])->name('soporte');
Route::get('/crearaviones', [AircraftController::class, 'index'])->name('aviones');
Route::post('/vuelos', [VueloController::class, 'store'])->name('vuelos.store');

Route::resource('aircraft', AircraftController::class);
// Rutas de autenticación generadas automáticamente
require __DIR__.'/auth.php';

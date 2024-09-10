<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\avionesController;
use App\Http\Controllers\rvuelosController;
use App\Http\Controllers\tiketController;
use App\Http\Controllers\soporteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/crearaviones', [avionesController::class, 'index'])->name('aviones');
    Route::get('/crearrutas', [rvuelosController::class, 'index'])->name('rutas');
    Route::get('/tiket', [tiketController::class, 'index'])->name('tiket');
    Route::get('/soporte', [soporteController::class, 'index'])->name('soporte');

require __DIR__.'/auth.php';

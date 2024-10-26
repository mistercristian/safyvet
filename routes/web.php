<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PeticionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoliticaControlador;
use App\Http\Controllers\TerminoControlador;
use App\Http\Controllers\DevolucionControlador;


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

    //------------ // PQRS // ---------->
    Route::get('/peticiones',[PeticionController::class, 'index'])->name('peticiones.index');
    Route::post('/servicios',[ServicioController::class, 'store'])->name('servicios.store');
    Route::get('/servicios/create', [ServicioController::class, 'create'])->name('servicios.create');
    Route::delete('/servicios/{servicio}', [ServicioController::class, 'destroy'])->name('servicios.destroy');
    Route::put('/servicios/{servicio}', [ServicioController::class, 'update'])->name('servicios.update');
    Route::get('/servicios/{servicio}/edit', [ServicioController::class, 'edit'])->name('servicios.edit');

    
    //------------ // POLITICAS // ---------->

    Route::get('/politicas',[PoliticaControlador::class, 'index'])->name('politicas.index');

     //------------ // Terminos // ---------->

     Route::get('/terminos',[TerminoControlador::class, 'index'])->name('terminos.index');

    //------------ // Terminos // ---------->

    Route::get('/devoluciones',[DevolucionControlador::class, 'index'])->name('devoluciones.index');
    Route::post('/devoluciones',[DevolucionControlador::class, 'store'])->name('devoluciones.store');
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PeticionController;
use App\Http\Controllers\ContactenosController;
use App\Http\Controllers\QuienesController;
use App\Http\Controllers\AyudaController;
use App\Http\Controllers\ServicioController;
use Illuminate\Support\Facades\Route;

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

    //------------ // SERVICIO JARDIN // ---------->
    Route::get('servicios/jardin', [ServicioController::class, 'indexJardin'])->name('servicios.jardin.index');

    //------------ // SERVICIO SPA // ---------->
    Route::get('servicios/spa', [ServicioController::class, 'indexSpa'])->name('servicios.spa.index');

    //------------ // SERVICIO PASEO // ---------->
    Route::get('servicios/paseo', [ServicioController::class, 'indexPaseo'])->name('servicios.paseo.index');

    Route::get('/contactos',[ContactenosController::class, 'index'])->name('contactenos.index');
    Route::post('/contactos',[ContactenosController::class, 'store'])->name('contactenos.store');
    
    Route::get('/quienes',[QuienesController::class, 'index'])->name('quienes.index');
    
    Route::get('/ayudas',[AyudaController::class, 'index'])->name('ayudas.index');



});

require __DIR__.'/auth.php';

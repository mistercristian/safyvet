<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PeticionController;
use App\Http\Controllers\ContactenosController;
use App\Http\Controllers\QuienesController;
use App\Http\Controllers\AyudaController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoliticaControlador;
use App\Http\Controllers\TerminoControlador;
use App\Http\Controllers\DevolucionControlador;
use App\Http\Controllers\PeticionControlador;


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
    Route::get('/peticiones',[PeticionControlador::class, 'index'])->name('peticiones.index');
    Route::post('/peticiones',[PeticionControlador::class, 'store'])->name('peticiones.store');

    
    //------------ // POLITICAS // ---------->
    //------------ // SERVICIO JARDIN // ---------->
    Route::get('servicios/jardin', [ServicioController::class, 'indexJardin'])->name('servicios.jardin.index');

    //------------ // SERVICIO SPA // ---------->
    Route::get('servicios/spa', [ServicioController::class, 'indexSpa'])->name('servicios.spa.index');

    //------------ // SERVICIO PASEO // ---------->
    Route::get('servicios/paseo', [ServicioController::class, 'indexPaseo'])->name('servicios.paseo.index');

    //------------ // PRODUCTO ALIMENTOS // ---------->
    Route::get('productos/alimento', [ProductoController::class, 'indexAlimento'])->name('productos.alimento.index');

    //------------ // PRODUCTO ACCESORIOS // ---------->
    Route::get('productos/accesorio', [ProductoController::class, 'indexAccesorio'])->name('productos.accesorio.index');

    //------------ // PRODUCTO MEDICAMENTOS // ---------->
    Route::get('productos/medicamento', [ProductoController::class, 'indexMedicamento'])->name('productos.medicamento.index');



    Route::get('/contactos',[ContactenosController::class, 'index'])->name('contactenos.index');
    Route::post('/contactos',[ContactenosController::class, 'store'])->name('contactenos.store');
    
    Route::get('/quienes',[QuienesController::class, 'index'])->name('quienes.index');
    
    Route::get('/ayudas',[AyudaController::class, 'index'])->name('ayudas.index');


    Route::get('/politicas',[PoliticaControlador::class, 'index'])->name('politicas.index');

     //------------ // Terminos // ---------->

     Route::get('/terminos',[TerminoControlador::class, 'index'])->name('terminos.index');

    //------------ // Terminos // ---------->

    Route::get('/devoluciones',[DevolucionControlador::class, 'index'])->name('devoluciones.index');
    Route::post('/devoluciones',[DevolucionControlador::class, 'store'])->name('devoluciones.store');
});

require __DIR__.'/auth.php';

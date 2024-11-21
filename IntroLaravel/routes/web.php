<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clientesController; 

// Rutas del controlador de vistas
Route::get('/inicio', [controladorVistas::class, 'home'])->name("inicio");
Route::get('/cliente', [controladorVistas::class, 'consulta'])->name("clientes");
Route::view('/component', 'componentes')->name('componentes');



// Rutas del controlador de clientes
Route::get('/cliente/create', [clientesController::class, 'create'])->name("formulario");
Route::post('/enviarCliente', [clientesController::class, 'store'])->name("enviarCliente"); 
Route::get('/clientes', [clientesController::class, 'index'])->name('listarClientes'); 

//rutas para update y delete
Route::get('/clientes/edit', [clientesController::class, 'edit'])->name("clientesEdit");
Route::put('/clientes/{id}', [clientesController::class, 'update'])->name('cliente.update');
Route::delete('/clientes/{id}', [clientesController::class, 'destroy'])->name('clientesDeleate');







//ruta tipo get
/* Route::get('/', function () {
    return view('welcome');
}); */

//ruta tipo view
/* Route::view('inicio', 'inicio') ->name ("inicio");

Route::view('form', 'formulario') ->name ('formulario');

Route::view('client', 'clientes') ->name ('clientes');

 */



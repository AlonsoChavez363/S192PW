<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controladorVistas;

Route::get('/inicio', [controladorVistas::class, 'home'])->name ("inicio");
Route::get('/form', [controladorVistas::class, 'formulario'])->name ("formulario");
Route::get('/client', [controladorVistas::class, 'consulta'])->name ("clientes");
Route::view('component', 'componentes') ->name ('componentes');     

Route::post('/enviarCliente', [controladorVistas::class, 'procesarCliente'])->name ("rutaEnviar");












//ruta tipo get
/* Route::get('/', function () {
    return view('welcome');
}); */

//ruta tipo view
/* Route::view('inicio', 'inicio') ->name ("inicio");

Route::view('form', 'formulario') ->name ('formulario');

Route::view('client', 'clientes') ->name ('clientes');

 */



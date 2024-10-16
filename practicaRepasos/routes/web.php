<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorLogica;


/* Route::get('/', function () {
    return view('welcome');
}); */

route::view('inicio', 'inicio') -> name('inicio');

route::view('trabajo', 'repaso1') -> name('trabajo');

Route::post('/enviarProceso', [controladorLogica::class, 'realizarConversion'])->name('rutaEnviar');

    

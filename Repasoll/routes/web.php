<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controladorVistas;


Route::get('/', [controladorVistas::class, 'home'])->name ("principal");
Route::get('/reg', [controladorVistas::class, 'registro'])->name ("registro");

Route::post('/enviarLibro', [controladorVistas::class, 'procesarLibro'])->name ("rutaEnviar");



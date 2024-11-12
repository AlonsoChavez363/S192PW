<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/', [controladorVistas::class, 'usuarios'])->name ("rutaUsuarios");

Route::post('/enviarUsuario', [controladorVistas::class, 'procesarUsuario'])->name("usuarios");


<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

route::view('inicio', 'inicio') -> name('inicio');

route::view('trabajo', 'repaso1') -> name('trabajo');

<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'principal') ->name ("principal");

Route::view('/registro', 'registro') ->name ('registro');


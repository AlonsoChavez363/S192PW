<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('principal');

    }

    public function registro(){
        return view('registro_libro');
        
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function usuarios(){
        return view('formUsuarios');
    }


    public function FormRequest(request $peticion){
        $validated = $peticion->validate([
            'correo'=>'required',
            'edad'=>'required|numeric',
            'contrasena'=>'required'
        ]);
    }
}

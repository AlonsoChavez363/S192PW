<?php

namespace App\Http\Controllers;
use App\Http\Requests\Alertas;


use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function usuarios(){
        return view('formUsuarios');
    }

    public function procesarUsuario(Alertas $peticionValidada){

        $usuario= $peticionValidada->input('correo');
        session()->flash('exito', 'se guardo el libro:'.$usuario);
        return to_route('rutaUsuarios');
    
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');

    }

    public function formulario(){
        return view('formulario');
        
    }

    public function consulta(){
        return view('clientes');
        
    }

    public function procesarCliente(request $peticion){

        //return 'La informacion del cliente llego al controlador';
        
        //return $peticion->all();

        //la ruta donde se hizo la peticion
        //return $peticion->path();
        
        //la ruta completa desde donde se hizo la peticion
        //return $peticion->url();

        //para devolver la ip desde donde se hizo la peticion
        return $peticion->ip();


    }
}

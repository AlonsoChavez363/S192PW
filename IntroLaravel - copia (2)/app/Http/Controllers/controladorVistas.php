<?php

namespace App\Http\Controllers;
use App\Http\Requests\validadorClientes;
use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');

    }

/*     public function formulario(){
        return view('formulario');
        
    } */


    public function consulta(){
        return view('clientes');
        
    }

    public function procesarCliente(validadorClientes $peticionValidada){

        //redireccion con valores en session
        $usuario= $peticionValidada->input('nombre');
        session()->flash('exito', 'se guardo el usuario'.$usuario);
        return to_route('formulario');
        
        //return 'La informacion del cliente llego al controlador';
        
        //return $peticion->all();

        //la ruta donde se hizo la peticion
        //return $peticion->path();
        
        //la ruta completa desde donde se hizo la peticion
        //return $peticion->url();

        //para devolver la ip desde donde se hizo la peticion
        
        //return $peticion->ip();
        
        //respuestas de redireccion
        //return redirection('/');

        //redireccion usando el nombre de la ruta
        //return redirect()->route('clientes');        

        //redireccion al origen
        //return back();
    }
}

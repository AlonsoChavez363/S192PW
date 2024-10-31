<?php

namespace App\Http\Controllers;
use App\Http\Requests\validadorLibros;


use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('principal');

    }

    public function registro(){
        return view('registro_libro');
        
    }
    public function procesarLibro(validadorLibros $peticionValidada){

        $libro= $peticionValidada->input('nombre');
        session()->flash('exito', 'se guardo el libro:'.$libro);
        return to_route('registro');
    
    }

}

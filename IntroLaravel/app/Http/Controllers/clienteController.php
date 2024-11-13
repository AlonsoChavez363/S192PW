<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorClientes;


class clienteController extends Controller
{
    public function create()
    {
        return view('formulario');
    }

    public function store(validadorClientes $request)
    {
        DB::table('clientes')->insert([
            "nombre"=>$request->input('nombre'),
            "apellido"=>$request->input('apellido'),
            "correo"=>$request->input('correo'),
            "telefono"=>$request->input('telefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>carbon::now(),    

        ]);

        $usuario=$request->input('nombre');

        session()->flash('exito', 'se guardo el usuario'.$usuario);
        return to_route('formulario');    
    }
}

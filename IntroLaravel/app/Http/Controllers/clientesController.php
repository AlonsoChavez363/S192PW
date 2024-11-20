<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorClientes;

class clientesController extends Controller
{
    /**
     * Nos sirve para la consulta del crud.
     */
    public function index()
    {
        $consultarClientes = DB::table('clientes')->get();
        return view('clientes', compact('consultarClientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorClientes $request)
    {
        Db::table('clientes')->insert([
            "nombre" => $request->input('nombre'),
            "apellido" => $request->input('apellido'),
            "correo" => $request->input('correo'),
            "telefono" => $request->input('telefono'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        $usuario = $request->input('nombre');
        session()->flash('exito', 'Se guardo el usuario: '.$usuario);
            return to_route('formulario');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = DB::table('clientes')->where('id',$id)->first();

        return view('formulario_edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
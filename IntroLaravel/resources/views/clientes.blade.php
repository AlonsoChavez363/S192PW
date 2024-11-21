@extends('layouts.plantilla1')
@section('titulo', 'Registro Clientes')
@section('cliente')

{{-- Tarjeta cliente --}}
<div class="container mt-5 col-md-8">
    @foreach ($consultarClientes as $cliente)
        <div class="card text-justify font-monospace">
            <div class="card-header fs-5 text-primary">
                {{$cliente->nombre}}
            </div>
            <div class="card-body">
                <h5 class="fw-bold">{{$cliente->correo}}</h5>
                <h5 class="fw-medium">{{$cliente->telefono}}</h5>
                <p class="card-text fw-lighter"></p>
            </div>
            <div class="card-footer text-muted">
                <a href="{{route('clientesEdit',$cliente->id)}}" class="btn btn-warning btn-sm">Actualizar</a>
                <form action="{{route('clientesDeleate',$cliente->id)}}" method="POST" style="display:inline-block", onsubmit="return confirm('Estas apunto de eliminar a este usuario?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    @endforeach

</div>
@endsection

@extends('layouts.plantilla1')
@section('titulo','Formulario')
@section('contenido')

          {{-- inica tarjeta de formulario --}}
          <div class="container mt-5 col-md-6">

            @if (@session('exito'))
            <x-alert tipo="success"> {{session('exito')}} </x-alert>
            <script>Swal.fire({
              title: "Respuesta del servidor",
              text: '{{ $value }}',
              icon: "success"
            });</script>
            @endif

            <div class="card font-monospace">
              <div class="card-header fs-5 text-center text-primary">
                {{__('Registro Clientes')}}
              </div>
              <div class="card-body text-justify">
                
                <form action="/enviarCliente" method="POST">

                  @csrf

                  <div class="mb-3">
                    <label for="nombre" class="form-label">{{__('Nombre')}}</label>
                    <input type="text" class="form-control" name="nombre" value=" {{ old('nombre') }} ">
                    <small class="fst-italic text-danger">{{ $errors->first('nombre') }}</small>
                  </div>

                  <div class="mb-3">
                    <label for="apellido" class="form-label">{{__('Apellido')}}</label>
                    <input type="text" class="form-control" name="apellido" value=" {{ old('apellido') }} ">
                    <small class="fst-italic text-danger">{{ $errors->first('apellido') }}</small>

                  </div>

                  <div class="mb-3">
                    <label for="correo" class="form-label">{{__('Correo')}}</label>
                    <input type="text" class="form-control" name="correo" value=" {{ old('correo') }} ">
                    <small class="fst-italic text-danger">{{ $errors->first('correo') }}</small>

                  </div>

                  <div class="mb-3">
                    <label for="telefono" class="form-label">{{__('Telefono')}}</label>
                    <input type="text" class="form-control" name="telefono" value=" {{ old('telefono') }} ">
                    <small class="fst-italic text-danger">{{ $errors->first('telefono') }}</small>

                  </div>

                  <div class="card-footer text-muted">
                    <div class="d-grid gap2 mt-2 mb-1">
                      <button type="submit" class="btn btn-success btn-sm">{{__('Guardar Clientes')}}</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
            @endsection
    


@extends('layouts.plantilla1')
@section('titulo','Formulario')
@section('contenido')

          {{-- inica tarjeta de formulario --}}
          <div class="container mt-5 col-md-6">
            <div class="card font-monospace">
              <div class="card-header fs-5 text-center text-primary">
                Registro Clientes
              </div>
              <div class="card-body text-justify">
                
                <form action="/enviarCliente" method="POST">

                  @csrf

                  <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                  </div>

                  <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="apellido">
                  </div>

                  <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="correo">
                  </div>

                  <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="telefono">
                  </div>

                  <div class="card-footer text-muted">
                    <div class="d-grid gap2 mt-2 mb-1">
                      <button type="submit" class="btn btn-success btn-sm"> Guardar Clientes</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
            @endsection
    


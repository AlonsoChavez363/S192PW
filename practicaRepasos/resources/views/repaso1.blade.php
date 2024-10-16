@extends('layouts.plantilla')
@section('titulo','Repaso 1')
@section('contenido')

<div class="container mt-5 col-md-6">
  <div class="card font-monospace">
    <div class="card-header fs-5 text-center text-primary">
      Calculadora
    </div>
    <div class="card-body text-justify">
      
      <form action="/enviarProceso" method="POST">
        @csrf
        <div class="form-group">
          <label for="formGroupExampleInput">De MB a GB</label>
          <input type="text" class="form-control" name="mb" placeholder="Ingrese MB">
          <button type="submit" class="btn btn-success btn-sm mt-2">Calcular</button>
        </div>
        
        <div class="form-group">
          <label for="formGroupExampleInput2">De GB a MB</label>
          <input type="text" class="form-control" name="gb" placeholder="Ingrese GB">
          <button type="submit" class="btn btn-success btn-sm mt-2">Calcular</button>
        </div>
      
        <div class="form-group">  
          <label for="formGroupExampleInput2">De GB a TB</label>
          <input type="text" class="form-control" name="gt" placeholder="Ingrese GB para convertir a TB">
          <button type="submit" class="btn btn-success btn-sm mt-2">Calcular</button>
        </div>
      
        <div class="form-group">
          <label for="formGroupExampleInput2">De TB a GB</label>
          <input type="text" class="form-control" name="tb" placeholder="Ingrese TB">
          <button type="submit" class="btn btn-success btn-sm mt-2">Calcular</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection

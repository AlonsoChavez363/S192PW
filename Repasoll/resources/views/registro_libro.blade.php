@extends('layouts.plantilla1')
@section('titulo','Registro')
@section('registro')
<style>
    body, html{
        height: 100%
    }
    .full-height{
        height: 100vh;
    }
</style>
<body>
        <center><h1>Formulario para registrar libro</h1></center>
        <div>
            <label for="nombre" class="form-label">ISBN</label>
            <input type="text" class="form-control" name="isbn">
        </div>
        <div>
            <label for="nombre" class="form-label">Nombre del libro</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div>
            <label for="nombre" class="form-label">NOmbre del autor</label>
            <input type="text" class="form-control" name="autor">
        </div>
        <div>
            <label for="nombre" class="form-label">Paginas totales</label>
            <input type="text" class="form-control" name="paginas">
        </div>
        <div>
            <label for="nombre" class="form-label">Año de publicacion</label>
            <input type="text" class="form-control" name="añoP">
        </div>
        <div>
            <label for="nombre" class="form-label">Nombre de la editorial</label>
            <input type="text" class="form-control" name="editorial">
        </div>
        <div>
            <label for="nombre" class="form-label">Correo</label>
            <input type="text" class="form-control" name="correo">
        </div>
        <div class="d-grid gap2 mt-2 mb-1">
            <button type="submit" class="btn btn-success btn-sm">Guardar </button>
        </div>
</body>
@endsection

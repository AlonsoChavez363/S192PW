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
    .formulari0-container{
        background-color: aqua;
        padding: 20px;
        border-radius: 8px;
        width: 600px;
        text-align: center;
    }
</style>
<body>
    <br>
    <br>
    <center>
    <div class="formulari0-container">
        <center><h1>Formulario para registrar libro</h1></center>
        <div>
            <label for="nombre" class="form-label">ISBN</label>
            <input type="text" class="form-control" name="isbn">
        </div>
        <br>
        <div>
            <label for="nombre" class="form-label">Nombre del libro</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <br>

        <div>
            <label for="nombre" class="form-label">Nombre del autor</label>
            <input type="text" class="form-control" name="autor">
        </div>
        <br>

        <div>
            <label for="nombre" class="form-label">Paginas totales</label>
            <input type="text" class="form-control" name="paginas">
        </div>
        <br>

        <div>
            <label for="nombre" class="form-label">Año de publicacion</label>
            <input type="text" class="form-control" name="añoP">
        </div>
        <br>

        <div>
            <label for="nombre" class="form-label">Nombre de la editorial</label>
            <input type="text" class="form-control" name="editorial">
        </div>
        <div>
            <label for="nombre" class="form-label">Correo</label>
            <input type="text" class="form-control" name="correo">
        </div>
        <br>

        <div class="boton">
            <button type="submit" class="btn btn-success btn-sm">Guardar </button>
        </div>
    </div>
    </center>
    <br>
</body>
@endsection

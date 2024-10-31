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
        background-color: rgb(110, 178, 209);
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
        <h1>Formulario para registrar libro</h1>
        <form action="/enviarLibro" method="POST">
            @csrf
            @if (@session('exito'))
            <x-alert tipo="success"> {{session('exito')}} </x-alert>
            <script>Swal.fire({
              title: "Todo correcto",
              text: "{{ session('exito') }}",              
              icon: "success"
            });</script>
            @endif

        <div>
            <label for="nombre" class="form-label">ISBN</label>
            <input type="text" class="form-control" name="isbn" value=" {{ old('isbn') }} ">
            <small class="fst-italic text-danger">{{ $errors->first('isbn') }}</small>

        </div>
        <br>
        <div>
            <label for="nombre" class="form-label">Nombre del libro</label>
            <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
            <small class="fst-italic text-danger">{{ $errors->first('nombre') }}</small>

        </div>
        <br>

        <div>
            <label for="nombre" class="form-label">Nombre del autor</label>
            <input type="text" class="form-control" name="autor" value=" {{ old('autor') }} ">
            <small class="fst-italic text-danger">{{ $errors->first('autor') }}</small>
        </div>
        <br>

        <div>
            <label for="nombre" class="form-label">Paginas totales</label>
            <input type="text" class="form-control" name="paginas" value=" {{ old('paginas') }} ">
            <small class="fst-italic text-danger">{{ $errors->first('paginas') }}</small>

        </div>
        <br>

        <div>
            <label for="nombre" class="form-label">Año de publicacion</label>
            <input type="text" class="form-control" name="añoP" value=" {{ old('añoP') }} ">
            <small class="fst-italic text-danger">{{ $errors->first('añoP') }}</small>

        </div>
        <br>

        <div>
            <label for="nombre" class="form-label">Nombre de la editorial</label>
            <input type="text" class="form-control" name="editorial" value=" {{ old('editorial') }} ">
            <small class="fst-italic text-danger">{{ $errors->first('editorial') }}</small>

        </div>
        <br>

        <div>
            <label for="nombre" class="form-label">Correo</label>
            <input type="text" class="form-control" name="correo" value=" {{ old('correo') }} ">
            <small class="fst-italic text-danger">{{ $errors->first('correo') }}</small>

        </div>
        <br>

        <div class="boton">
            <button type="submit" class="btn btn-success btn-sm">Guardar </button>
        </div>
        </form>
    </div>
    </center>
    <br>
</body>
@endsection

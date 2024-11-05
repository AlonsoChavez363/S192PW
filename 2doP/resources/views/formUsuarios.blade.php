<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
    @vite(['resources/app.js'])
</head>
<body>

    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    <div class="container  col-md-4">

    <form>
        <x-alert tipo="success"> {{session('exito')}} </x-alert>
        <script>Swal.fire({
          title: "Todo correcto",
          text: "{{ session('exito') }}",              
          icon: "success"
        });</script>
        @endif

        <div class="mb-3">
            <label  class="form-label">Correo: </label>
            <input type="text" class="form-control" nombre="correo" value="{{ old('correo')}}">
            <small class="fst-italic text-danger">{{ $errors->first('correo') }}</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Contraseña: </label>
            <input type="text" class="form-control" nombre="contrasena"value="{{old('contrasena')}}" >
            <small class="fst-italic text-danger">{{ $errors->first('contrasena') }}</small>

        </div>                

        <div class="mb-3">
            <label  class="form-label">Edad: </label>
            <input type="text" class="form-control" nombre="edad" value="{{old('edad')}}">
            <small class="fst-italic text-danger">{{ $errors->first('edad') }}</small>

        </div>


        <div class="boton">
            <button type="submit" class="btn btn-danger btn-sm ">Guardar Usuario</button>
        </div>


</div>


</body>
</html>
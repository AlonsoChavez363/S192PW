<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js']) 
    <title> @yield('titulo') </title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('inicio')}}">{{__('Turista sin maps')}}</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">

            <li class="nav-item active">
              <a class="nav-link {{ request()->routeIs('formulario')?'text-warning': '' }}" href="{{route('formulario')}}">{{__('Registro Clientes')}}<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('clientes')?'text-warning': '' }}" href="{{route('clientes')}}">{{__('Consultar Clientes')}}</a>
            </li>
          </ul>
        </nav>

        @yield('contenido')
        @yield('cliente')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js']) 
    <title>@yield('titulo')</title>
    <style>
        body, html{
            height: 100%
        }
        .full-height{
            height: 100vh;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
            <a href="{{ route('inicio') }}" class="btn btn-outline-success">Ir al Inicio</a>
            <a href="{{ route('trabajo') }}" class="btn btn-sm btn-outline-secondary">Ir a Repaso 1</a>
        </form>
    
        
    </nav>
    @yield('contenido')
</body>
</html>

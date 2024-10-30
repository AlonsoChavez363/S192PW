<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js']) 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-brand" href="{{ route('registro') }}">RegistroLibros <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('principal')
    @yield('registro')

    
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p>Todos los derechos reservados.</p>
            <p>Propeidad: Alonso Chávez Alegria</p>  
            <p>Libros Mamalones</p>
            <p>Creado el dia 29/10/2024</p>
        </div>
    </footer>
</body>
</html>

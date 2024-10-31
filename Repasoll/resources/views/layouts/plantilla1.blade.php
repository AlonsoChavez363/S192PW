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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        footer{
            background-color: rgb(102, 157, 180);
            padding: 0;
            
        }
        .navbar {
            background-color:  rgb(189, 189, 189);
        }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
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

    <p></p>
    <footer>
        <div class="footer">
           <div class="container">
            <center>
                <h2>Derechos reservados al creador</h2>
                <h3>Creador: Alonso Chavez Alegria</h3>
                <h4>Creado el dia 29/10/2024</h4>
            </center>
              <div class="row">
                 <div class=" col-md-3 col-sm-6">
                    <ul class="social_icon">
                        <center><h3>Redes sociales</h3></center>
                       <li><a href="https://www.facebook.com/profile.php?id=100012537076656&mibextid=LQQJ4d"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                       <li><a href="https://www.instagram.com/alonzch.32/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                    <p class="variat pad_roght2">
                    
                </div>
     </footer>

</body>
</html>

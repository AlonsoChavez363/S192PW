<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js']) 
    <title>Document</title>
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
    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
        <h1 class="display-1">Practica De Repaso</h1>
        <p>Alonso Chávez Alegria </p>
        <p>S192 Prgramacin Web</p>
        <p>Correo: 122044170@upq.edu.mx</p>
        <a href="{{ route('trabajo') }}" class="btn btn-primary">Ir a Repaso 1</a>
    </div>

    
</body>
</html>
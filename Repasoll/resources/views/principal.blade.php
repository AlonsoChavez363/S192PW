@extends('layouts.plantilla1')
@section('titulo','Principal')
@section('principal')
<style>
    body, html{
        height: 100%
    }
    .full-height{
        height: 100vh;
    }
    .carousel-inner img{
      width: 250px;
      height: 600px;
      margin: center;
    }
    .carousel-caption{
      background-color: rgba(110, 106, 106, 0.274);
      height: 50x;
    }
</style>
<body>
  <br>
  <br>

  <h1><center>Libros Asombrosos</center></h1>
  <br>
  <br>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/img/carrusel1.jpg" alt="Noticia 1">
          <div class="carousel-caption d-none d-md-block">
          <h5>Otro libro de Youtubers?</h5>
          <p>El werever saca su libro a la venta</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/img/carrusel2.jpg" alt="Notica 2">
          <div class="carousel-caption d-none d-md-block">
            <h5>Leer un libro??</h5>
            <p>El leer un libro hace que nuestro cerebro se encuentre en un mejor estado manteniendolo en un estado constante de trabajo.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/img/carrusel3.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h4>Lugares asombrosos</h4>
            <br>
            <p>El Youtuber LuisitoComunica saca a la venta su libro Lugares Asombrosos en donde nos cuento lo mejor de cada uno de sus viajes al rededor del mundo.</p>
          </div>
        </div>
      </div>
      <br>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
</body>
@endsection

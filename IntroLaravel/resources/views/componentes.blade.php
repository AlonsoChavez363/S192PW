@extends('layouts.plantilla1')

@section('titulo','Componentes')

@section('contenido')

    
    <x-Card encabezado="Componente" titulo="Dinamico" textoBoton="Enviar"> Soy el texto del primer componente </x-Card>

    <x-Card encabezado="Componente2" titulo="Dinamico2" textoBoton="No Enviar"> Soy el texto del segundo componente </x-Card>

    <x-Card encabezado="Cepillin" titulo=" Eres un Naco y Estupido" textoBoton="Naco"> Estoy con cepiiilliiiiinnnnnn!!!!!</x-Card>

    <x-Alert tipo="success">bellota</x-Alert>
    <x-Alert tipo="primary">burbuja</x-Alert>
    <x-Alert tipo="danger">bombom</x-Alert>




    @endsection


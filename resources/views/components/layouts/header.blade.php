<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        {{config('app.name')}}
    </title>

    <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
    <meta name="author" content="Vincent Garreau" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" media="screen" href="/css/fondo.css">
    <link rel="stylesheet" href="/css/header.css">
    <!-- CSS only -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a href="{{ route('home') }}" class="enlace">
            <img src="img/logoVenenum.png" alt="" class="logo">
        </a>
        <ul>
            <li><a class="active" href="{{route('areaPersonal')}}">AREA PERSONAL</a></li>
            @auth
            @if (Auth::user()->rol == "Profesor")
            <li><a href="{{route('VentanaGruposNueva')}}">GRUPOS</a></li>
            @endif
            @endauth
            <li><a href="{{route('ventanaPuntuacion')}}">PUNTUACION</a></li>
            <li><a href="{{route('login')}}">LOGOUT</a></li>
            <a href="{{ route('areaPersonal') }}"><img class="img-circle" id="fotoperfil" src="img/userimg/{{ Auth::user()->imagen}}" alt="Avatar"></a>
        </ul>
    </nav>




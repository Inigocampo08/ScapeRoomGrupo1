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
            <li><a href="{{route('VentanaGruposNueva')}}">GRUPOS</a></li>
            <li><a href="{{route('ventanaPuntuacion')}}">PUNTUACION</a></li>
            <li><a href="{{route('login')}}">LOGOUT</a></li>
            <a href="{{ route('areaPersonal') }}"><img class="img-circle" id="fotoperfil" src="img/userimg/{{ Auth::user()->imagen}}" alt=""></a>
        </ul>
    </nav>
    

    
{{-- <header style="background-color: black">
    <div class="container-fluid">
        <div class="row" id="contenedor">
            <div class="col-xl-2 col-lg-2 col-sm-2 col-xs-4 col-12 ">
                <a href="{{ route('home') }}"> 
                    <img src="img/logoVenenum.png" id="logo" alt="" ></a>
            </div>
            
                    <div class="col-xl-8 col-lg-9 col-sm-9 col-xs-8 " id="navegador"  >
                        <ul><li><a href="{{route('areaPersonal')}}"><p>AREA PERSONAL</p></a></li>
                            <li><a href="{{route('VentanaGruposNueva')}}"><p>GRUPOS</p></a></li>
                            <li><a href="{{route('ventanaPuntuacion')}}"><p>PUNTUACION</p></a></li>
                            <li><button><a href="{{route('login')}}"></a>LOGOUT</button></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-lg-1 col-sm-1 offset-xs-6 col-xs-2 col-2" id="fotoperfils" >
                        <a href="{{ route('areaPersonal') }}"><img class="img-circle" id="fotoperfil" src="img/userimg/{{ Auth::user()->imagen}}" alt=""></a>
                    </div>
        </div>
    </div>

    </div>
</header>
 --}}



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Entrando al Almacen</title>
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" con  {{-- <link rel="stylesheet" href="menuPrincipal.css"> --}}
tent="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

            <link href="./css/bootstrap.min.css" rel="stylesheet">
            <script src="./js/sweetalert2.all.min.js"></script>
                <script src="./js/vue.min.js"></script>
                <script src="./js/script.js"></script>
                <script src="./js/cont.js"></script>

<script>
    window.onload = updateClock;

var minutos=1;
var segundos = 30;

function updateClock() {
    if(segundos<10 && segundos>0)
    {
        segundos="0"+segundos;
    }
  document.getElementById('countdown').innerHTML = minutos +":"+ segundos;
  if(segundos==0 && minutos==0){
    var dato=document.getElementById('countdown').innerHTML="Se acabo el tiempo";
		dato.style.color="red";
    }else{
    
        segundos-=1;
        if(segundos==0 && minutos!=0)
        {
            segundos=59;
            minutos-=1;
        }
        setTimeout("updateClock()",1000);
        }
}
    </script>


    @vite(['resources/js/juego2.js', 'resources/js/juego2.css'])

    </head>

    <body>
        <x-layouts.header />
        <div id="todo" class="container-fluid">
            <br>
            <div style="row">
                <div class="col-xl-12 col-sm-12 col-12">
                    <h1 class="text-center" style="color: black;">Juego de memorama</h1>
                </div>
                <div class="col-xl-12 col-sm-12 col-12 text-right">
                    <h1 class="text-center" id="countdown" style="color: black"></h1>
                </div>
            </div>
                <br>
                <div id="explicacion" class="container">
                    <div class="col-xl-10 col-sm-10 col-10 offset-1">
                        <br>
                        <p style="color: black">Debes acertar la palabra oculta que se refieren a los Microorganismos estudiados en clase,
                        las palabras son compuestas pero estan sin espacio. Debes ir eligiendo letra a letra hasta adivinar el Microorganismo.
                        SOLO TIENES 8 INTENTOS </p>
                        <br>
                    </div>
                </div>
                <br>
                <main role="main" class="container" id="app">
                </main>
            <br><br>
        </div>
        <x-layouts.footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html> 
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


    @vite(['resources/js/juego2.js', 'resources/js/juego2.css'])

    </head>

    <body>
        <x-layouts.header />
        <div id="todo" class="container-fluid">
            <br><br>
            <div class="container">
            </div>
            <div style="row">
                <div class="col-xl-6 col-sm-6 col-6 text-center offset-xl-3">
                    <h1 style="color:#9a9999;">Enhorabuena {{Auth::user()->name}} !!</h1>
                    <h1 style="color:#9a9999;">Puntuacion: 25pts</h1>
                    <img src="img/userimg/{{ Auth::user()->imagen}}" id="fotoperfil" style="height:170px;width:170px;"><br><br>

                </div>
            </div>
        </div>
        <x-layouts.footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html> 
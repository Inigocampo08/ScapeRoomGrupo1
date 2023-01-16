<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Area Personal</title>
    <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
    <meta name="author" content="Vincent Garreau" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" media="screen" href="/css/fondo.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>


    <style>
        button {
            background-color: transparent;
            background-color: #00ff0084;
            border: 3px solid #00ff0084;
            border-radius: 6px;
            color: #00ff00;
            padding: 6px;
        }

        a :hover {
            color: #89918984;
        }

        /* footer {
            background-color: #252525;
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 50px;
            color: white;
            z-index: 2;
             bottom:-10px;
            display: flex;
        } */

        footer,a,h3 {
            color: #00ff00;
        }
        ul {
            list-style: none;
        }

        .campodetexto {

            padding: 5px;
            width: 75mvh;
            border: 3px solid #00ff00;
            border-radius: 6px;
            background-color: #00ff0084;
            margin-left: 10px;
            margin-right: 10px;


        }

        .campodetexto:focus {

            background-color: #00ff00;
            border: 3px solid #00ff0084;

        }

        .boton:hover {

            border: 3px solid #00ff00;
            color: #033a0384;
            background-color: #00ff00;

        }

        .boton {
            border: 3px solid #00ff0084;
            border-radius: 6px;
            color: #00ff00;
            background-color: #00ff0084;
            padding: 6px;

        }
    </style>
    </head>

    <body>



        <x-layouts.header />
        <x-layouts.nav />

            <div class="container-fluid" style="background-color:#252525;">
                <div class="row">
                    <div class="col-12 col-sm-4 col-xl-4" style="height:280px;text-align:center;background-color: #252525;">
                        <img src="/img/avatar.png" style="height:150px;width:150px;"><br><br>
                        <h1 style="color: #00ff00">Admin</h1>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-6" style="background-color:#252525; height:480px;">
                        <h3>Nombre:</h3>
                        <input type="text" class="campodetexto  form-control" placeholder="Nombre" name="nombre"
                            value="Nombre" width="20px" required>
                        <br>
                        <h3>Apellido:</h3>
                        <input type="text" class="campodetexto  form-control" placeholder="Apellido" name="Apellido"
                            value="Apellido" required>
                        <br>
                        <h3>Email:</h3>
                        <input type="text" class="campodetexto  form-control" placeholder="Email" name="Email"
                            value="Email" required>
                        <br>
                        <h3>Imagen:</h3>
                        <input type="file" name="foto" placeholder="FOTO" id="btn-foto" style="format:none;" class="campodetexto">
                        <br><br>
                        <button type="submit" class="boton  btn">Guardar</button>
                    </div>
                </div>
            </div>

            <footer>
                <div class="container-fluid">
                    <div class="row" style="background-color:#252525; height:119px">
                        <div class="col-xl-4 col-sm-4 col-4">
                            <br>
                            <p class="fs-6" style="color: 00ff00">©2023 por Venenum</p>
                        </div>
                        <div class="col-xl-4 col-sm-4 col-4">
                            <br>
                            <p class="fs-6"><a href="mailto:ciprianclase@gmail.com">¿Tienes dudas? Pregúntanos</a>
                            <p>
                        </div>
                        <div class="col-xl-4 col-sm-4 col-4">
                            <br>
                            <p class="fs-6"><a href="https://www.google.com/maps/dir//cifp+txurdinaga/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0xd4e4fac87437727:0x364f27e82def0130?sa=X&ved=2ahUKEwjk2qLliL38AhXiRvEDHanuD1UQ9Rd6BAhZEAU">Como llegar</a>
                            <p>
                        </div>
          
                    </div>
                </div>
            </footer>
  


        <script src="/js/particles.min.js"></script>
        <script src="/js/particlesjs-config.json"></script>



        <!-- JavaScript Bundle with Popper -->
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}

    </body>

</html>

{{--
{{-- <div class="offset-xl-3 col-xl-6 col-10 offset-1 text-center "style="background-color:red; height: 500px; font-size:16px"> --}}
{{-- <div class="col-xl-4 col-4 text-center"><img src="/img/LogoFinal.png" ></div>
                    <div class="col-xl-8 col-8 text-center">
                      <label>Nombre:</label>
                      <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="Nombre" required>
                      <br>
                      <label>Apellido:</label>
                      <input type="text" class="form-control" placeholder="Apellido" name="Apellido" value="Apellido" required>
                      <br>
                      <label>Email:</label>
                      <input type="text" class="form-control" placeholder="Email" name="Email" value="Email" required>
                      <br>
                      <label>Imagen:</label>
                      <input type="text" class="form-control" placeholder="Imagen" name="Imagen" value="Imagen" required> --}}

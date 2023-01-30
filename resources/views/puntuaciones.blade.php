<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!-- CSS only -->
    {{-- <link rel="stylesheet" media="screen" href="/css/fondo.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Puntuaciones</title>
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
    

            <div class="container-fluid" style="background-color:#252525;">
                <div class="row">
                    <div class="col-12 col-sm-4 col-xl-4" style="height:280px;text-align:center;background-color: #252525;">
                        <img src="/img/avatar.png" style="height:150px;width:150px;"><br><br>
                        <h1 style="color: #00ff00">{{Auth::user()->name}}</h1>
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
                        <input type="file" name="foto" placeholder="FOTO" id="btn-foto" class="campodetexto">
                        <br><br>
                        <button type="submit" class="boton  btn">Guardar</button>
                    </div>
                </div>
            </div>

            <x-layouts.footer>
  

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>
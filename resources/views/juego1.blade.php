<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Entrando al Almacen</title>
    <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
    <meta name="author" content="Vincent Garreau" />
    <meta name="viewport" link rel="stylesheet" href="menuPrincipal.css" tent="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" media="screen" href="/css/fondo.css">
    <link rel="stylesheet" href="menuPrincipal.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <style>
        button {
            background-color: transparent;
            background-color: #00ff0084;
            border: 3px solid #00ff0084;
            border-radius: 6px;
            color: #00ff00;
            padding: 6px;
        }

        body {
            background-color: #252525;
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

        footer,
        a,
        h3,
        h1,
        p {
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

        hr {
            color: #00ff00;
        }
    </style>
</head>
<?php

// // variables de conexion
// $host = "localhost";
// $username = "root";
// $password = "";
// $dbname = "reto2";


try {

    // creo la conexion a la base
    $conexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // tomo el error y lo convierto en exception
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conexion realizada";
    echo "<br>";

    // Me conecto a la base de datos para obtener los medios de cultivo
    $consulta = $conexion->prepare("SELECT * FROM prueba1");
    $consulta->execute();
    $resultados = $consulta->fetchAll();



    // escribo todos los registros obtenidos en arrays
    $opcionA = array();
    $opcionB = array();
    $IDpregunta = array();

    foreach ($resultados as $columna) {
        array_push($opcionA, $columna['OpcionA']);
        array_push($opcionB, $columna['OpcionB']);
        array_push($IDpregunta, $columna['IDpregunta']);
    }
    // test de las respuestas obtenidas
    /*
        var_dump($opcionA);
        echo "<br><br>";
        var_dump($opcionB);
        echo "<br><br>";
        var_dump($IDpregunta);
    */

    // cojo 5 del array con un numero aleatorio
    $medioCultivo = array();
    $caracteristica = array();
    $indice = array();
    $random = 0;
    for ($posicion = 0; $posicion < 5; $posicion++) {

        $random = rand(0, 29);
        array_push($medioCultivo, $opcionA[$random]);
        array_push($caracteristica, $opcionB[$random]);
        array_push($indice, $IDpregunta[$random]);
    }

    // test de las respuestas obtenidas
    /*
        var_dump($medioCultivo);
        echo "<br><br>";
        var_dump($caracteristica);
        echo "<br><br>";
        var_dump($indice);
    */
} catch (PDOException $e) {
    echo "La conexión ha fallado: " . $e->getMessage();
}

?>



<body>

    <x-layouts.header />

    <div class="container-fluid" style="background-color:#252525;">
        <div class="row">
            <div class="col-10 col-sm-10 col-xl-10 offset-1" style="text-align: center;">
                <h1>Entrando al Almacén</h1>
                <p> Acabas de entrar al almacén donde están los medios de cultivo para conseguir el antídoto. Para ello tienes que unir el medio de cultivo con sus características.
                    Debes unir los 5 cultivos para poder acceder a la siguiente puerta del almacén. ¡La salvación esta en tus manos!</p>
            </div>
        </div>
        <div class="row" style="height: 490px;">
            <div class="col-6 col-sm-6 col-xl-6 text-center">
                <br><br>
                <h3><u>Medios de cultivo</u></h3>
                <br>
                <?php

                for ($posicion = 0; $posicion < 5; $posicion++) {
                    echo "<button name='button' id='" . $indice[$posicion] . "' onclick=eventoClickMedio(this) class='medioCultivo' value='" . $indice[$posicion] . "'>" . $medioCultivo[$posicion] . "</button><br><br>";
                }
                
                ?>

            </div>
            <div class="col-6 col-sm-6 col-xl-6 text-center">
                <br><br>
                <h3><u>Características</u></h3>
                <br>
                <?php

                for ($posicion = 0; $posicion < 5; $posicion++) {
                    echo "<button name='button' id='" . $indice[$posicion] . "' onclick=eventoClickCaracteristica(this) class='caracteristica' value='" . $indice[$posicion] . "'>" . $caracteristica[$posicion] . "</button><br><br>";
                }

                ?>
            </div>
        </div>
        <div class="row">
            <hr>
            <div class="col-4 col-sm-4 col-xl-4 text-center offset-4">
                <a href="{{ route('juego2')}}"><button name="button">Continuar</button></a><br>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid">
            <div class="row" style="background-color:#252525; height:119px;">
                <div class="col-xl-4 col-sm-4 col-4 text-center">
                    <br><br><br>
                    <p class="fs-6">©2023 por Venenum</p>
                </div>
                <div class="col-xl-4 col-sm-4 col-4 text-center">
                    <br><br><br>
                    <p class="fs-6"><a href="mailto:ciprianclase@gmail.com">¿Tienes dudas? Pregúntanos</a>
                    </p>
                </div>
                <div class="col-xl-4 col-sm-4 col-4 text-center">
                    <p class="fs-6">
                        <br><br><br>
                        <a href="https://www.google.com/maps/dir//cifp+txurdinaga/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0xd4e4fac87437727:0x364f27e82def0130?sa=X&ved=2ahUKEwjk2qLliL38AhXiRvEDHanuD1UQ9Rd6BAhZEAU">Como llegar</a>
                    </p>
                </div>

            </div>
        </div>
    </footer>
    <!--
    <script src="/js/particles.min.js"></script>
    <script src="/js/particlesjs-config.json"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    -->
    <script src="../js/juego1.js"></script>


    
</body>



</html>
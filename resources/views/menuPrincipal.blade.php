<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  {{-- <link rel="stylesheet" href="menuPrincipal.css"> --}}
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
{{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> --}}

<style>
button{
    background-color:transparent;
    background-color: #00ff0084;
    border: 3px solid #00ff0084;
    border-radius: 6px;
    color: #00ff00;
    padding: 6px;
}
a :hover{
  color: #033a0384;
}
ul {
    list-style: none;
}
a{
    color: white;
}

body{
    background-color: #252525;
}
</style>
</head>
<body>

    <x-layouts.header />
    <x-layouts.nav/>
    <div class="container-fluid" style="background-color:#252525;">
        <br><br><br>

        <div class="row" style="background-color:#252525">
                <div class=" col-md-8 col-8 text-center offset-2" style="font-size:16px" >
                    <h1 style="font-size: 45px; color:white;">Laboratorio</h1><br>
                    <p style="font-size: 22px;  color:white;">En un laboratorio de máxima seguridad biológica, ha ocurrido un terrible accidente. A una persona trabajadora del mismo, se le ha roto un vial cuando lo transportaba. Dicho vial contiene agentes biológicos que supone un serio peligro para las personas trabajadoras, con muchas probabilidades de que se propague a la colectividad y sin que exista, generalmente, una profilaxis o un tratamiento eficaz.</p><br>

                    <p style="font-size: 22px;  color:white;">La trabajadora tiene a partir de este momento 60 minutos para determinar el antídoto, ingerirlo y acabar con el microorganismo mortal. Para conseguirlo deberá realizar una serie de pruebas, que le permitirán obtener los códigos secretos que abren las puertas de otras salas y almacenes de reactivos. ¿Le ayudas a conseguirlo?
                        </p>
                        <br>
                        <button id="bot">
                            <a href="{{ route('juego2')}}" style="text-decoration:none;"><h1>JUGAR</h1></a>
                        </button>
                </div>
            </div>
    </div>
<x-layouts.footer/>

</body>
</html>

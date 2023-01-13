<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" con  {{-- <link rel="stylesheet" href="menuPrincipal.css"> --}}
tent="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" media="screen" href="/css/fondo.css">
  {{-- <link rel="stylesheet" href="menuPrincipal.css"> --}}
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

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
footer{
    background-color: #252525;
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 50px;
    color: white;
    z-index: 2;
    /* bottom:-10px; */
    display: flex;
}    
ul {
    list-style: none;
}
a{
    color: white;
}

</style>
</head>
<body>

    

    <x-layouts.header />

    <div id="particles-js">
        
            <div class="row" style="position: absolute">
                <div class=" col-md-8 col-8 text-center offset-2" style=" height: 700px; font-size:16px">
                    <h1 style="font-size: 45px; color:white;">Laboratorio</h1><br>
                    <p style="font-size: 22px;  color:white;">En un laboratorio de máxima seguridad biológica, ha ocurrido un terrible accidente. A una persona trabajadora del mismo, se le ha roto un vial cuando lo transportaba. Dicho vial contiene agentes biológicos que supone un serio peligro para las personas trabajadoras, con muchas probabilidades de que se propague a la colectividad y sin que exista, generalmente, una profilaxis o un tratamiento eficaz.</p><br>

                    <p style="font-size: 22px;  color:white;">La trabajadora tiene a partir de este momento 60 minutos para determinar el antídoto, ingerirlo y acabar con el microorganismo mortal. Para conseguirlo deberá realizar una serie de pruebas, que le permitirán obtener los códigos secretos que abren las puertas de otras salas y almacenes de reactivos. ¿Le ayudas a conseguirlo?
                        </p>

                        <button id="bot">
                            <h1><a href="{{ route('juego1')}}" style="text-decoration:none;">JUGAR</h1>
                        </button>
                </div>
            
                {{-- <div class=" col-md-2 text-center" style=" height: 700px;">
                    
                </div> --}}
             </div>
             <footer style="position: absolute">
                <div  class="container-fluid">
                    <div class="row" style="background-color:#252525; height:60px;">
                        <div class="col-xl-4 col-sm-4 col-4" >
                            <p class="fs-6">©2023 por Venenum</p>
                         </div>   
                        <div class="col-xl-4 col-sm-4 col-4">
                            <p class="fs-6"><a href="mailto:ciprianclase@gmail.com">¿Tienes dudas? Pregúntanos</a><p>
                         </div>
                         <div class="col-xl-4 col-sm-4 col-4">
                             <p class="fs-6"><a href="https://www.google.com/maps/dir//cifp+txurdinaga/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0xd4e4fac87437727:0x364f27e82def0130?sa=X&ved=2ahUKEwjk2qLliL38AhXiRvEDHanuD1UQ9Rd6BAhZEAU">Como llegar</a><p>  
                         </div>
                       
                    </div>
                </div>
                </footer>
            </div>


    <script src="/js/particles.min.js"></script>
    <script src="/js/particlesjs-config.json"></script>

<!-- count particles -->

<!-- particles.js container -->

{{-- <!-- scripts -->
<script src="../particles.js"></script>
<script src="js/app.js"></script>
<script src="../../js/particles.min.js"></script>
<script src="../../js/particlesjs-config.json"> </script>

<!-- stats.js -->
<script src="js/lib/stats.js"></script> --}}
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>

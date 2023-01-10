<style>
footer{
    background-color: black;
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 40px;
    color: white;
}    
</style>

<footer>
<div  class="container-fluid">
    <div class="row" style="background-color:	black ">
      <div class="col-md-2 col-sm-3 col-6  " style= height: 220px;>
        <ul>
            <li><a href="{{ route('ventanaEstadisticas')}}">Estadisticas</a></li>
            <li><a href="{{ route('ventanaGrupos')}}">Grupos</a></li>
            <li><a href="{{ route('ventanaPuntuacion')}}">Puntuacion</a></li>
            <li> <a href="{{ route('ventanaPrueba')}}">Prueba</a></li>

        </ul>
     </div>
      <div class="col-md-1 col-sm-3 col-6 offset-md-9 " style= height: 220px; >
        <p>©2023 por Venenum</p>
     </div>    
    </div>
</div>
</footer>

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
#principal{
    background-color:#252525;
     min-height:calc(100vh - 100px - 80px);




}
</style>


    <x-layouts.header />
    <div class="container-fluid" id="principal" >
        <br><br><br>
        
        <div class="row" style="background-color:#252525">
                <div class=" col-md-8 col-8 text-center offset-2" style="font-size:16px" >
                    <br>
                    <h1 style="font-size: 45px; color:white;">Laboratorio</h1><br>
                    <p style="font-size: 22px;  color:white;">En un laboratorio de máxima seguridad biológica, ha ocurrido un terrible accidente. A una persona trabajadora del mismo, se le ha roto un vial cuando lo transportaba. Dicho vial contiene agentes biológicos que supone un serio peligro para las personas trabajadoras, con muchas probabilidades de que se propague a la colectividad y sin que exista, generalmente, una profilaxis o un tratamiento eficaz.</p>
                    <br>
                    <p style="font-size: 22px;  color:white;">La trabajadora tiene a partir de este momento 60 minutos para determinar el antídoto, ingerirlo y acabar con el microorganismo mortal. Para conseguirlo deberá realizar una serie de pruebas, que le permitirán obtener los códigos secretos que abren las puertas de otras salas y almacenes de reactivos. ¿Le ayudas a conseguirlo?
                        </p>
                        <br>
                        <button id="bot">
                            <a href="{{ route('juego2')}}" style="text-decoration:none;"><h1>JUGAR</h1></a>
                        </button>
                        <br>
                        <br>
                       <audio controls src="/audio/musicaFondo.mp3" autoplay loop="infinite" class="d-none"  ></audio>
                        {{-- <script>
                            window.onload = function() {
                                document.getElementById("autoplay").play();
                            }
                        </script> --}}
                        <br>
                        <br>
                </div>
            </div>
    </div>
<x-layouts.footer/>



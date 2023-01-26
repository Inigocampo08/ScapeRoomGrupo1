<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<script src="https://kit.fotawesome.com/9d49876e0a.js" crossorigin="anonymous"></script>
<style>
    #botonlog {
        margin-top: 30px;
        margin-right: 20px;
        height: 50px;
        color: white;
    }
    header {
        border-bottom: 4px solid #00ff00;
    }
    #inforpersonal{
        flex-direction: column;
        justify-content: center;
    
    }
    #salir{
        margin-right: 15px;
    }
    #nombrejugador{
        color: #00ff00
        color: #00ff00;
    }
    #fotoperfil{

    width:80px;
    height:80px;
    border-radius:150px;
    border:10px solid #252525;

    }
    #navegador {
        margin-top: 15px;
        text-align: right;
        display: block;
    }
    #navegador ul{
        list-style-type: none;
        
      
    }
    #navegador ul li a {
        text-decoration: none;
    }
    #navegador  li{
        display: inline-block;
      
        margin: 5px;
 
    }
    #navegador{
        align-items:right;
    }
</style>
<header>
    <div class="container-fluid">
        <div class="row" style="background-color:#252525 ; height:80px; text-aling:left;">
            <div class="col-xl-2 col-sm-2 " style="text-align:left">
                <a href="{{ route('home') }}"> 
                    <img src="img/logoVenenum.png" alt="" style="height:80px; "></a>
                    {{-- <img src="img/LogoFinal.png" alt="" style="height:100px"></a> --}}      
            </div>
            
                    <div class="col-xl-9 col-sm-9 " id="navegador" style="height: 80px; text-aling:rigth;" >
                        <ul><li><a href="{{route('areaPersonal')}}"><p>AREA PERSONAL</p></a></li>
                            <li><a href="{{route('VentanaGruposNueva')}}"><p>GRUPOS</p></a></li>
                            <li><a href="{{route('ventanaPuntuacion')}}"><p>PUNTUACION</p></a></li>
                            <li><button><a href="{{route('login')}}"></a>LOGOUT</button></li>
                        </ul>
                    </div>
                    <div class="col-xl-1 col-sm-1 col-1" >
                        <a href="{{ route('areaPersonal') }}"><img class="img-circle" id="fotoperfil" src="img/userimg/{{ Auth::user()->imagen}}" alt=""></a>
                    </div>
                    {{-- <div><a href="{{ route('login') }}"><img src="img/LogoLogitoFinal.png" style="height:30px;"  id="salir" alt=""></a></div>
                    <div><a href="{{ route('areaPersonal') }}"><img class="img-circle" id="fotoperfil" src="img/userimg/{{ Auth::user()->imagen}}" alt=""></a></div>
                    <div id="nombrejugador"><p style="color: #00ff00; margin-right:30px;">{{ Auth::user()->name }}</p></div> --}}
                
               
                  
          
        </div>
    </div>

    </div>
</header>




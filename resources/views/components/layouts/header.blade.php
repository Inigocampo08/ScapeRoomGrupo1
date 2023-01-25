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
        align-items-center;
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

</style>
<header>
    <div class="container-fluid">
        <div class="row" style="background-color:	#252525 ">
            <div class="col-xl-7 col-sm-7 col-6" style="text-align:left">
                <a href="{{ route('home') }}">
                    <img src="img/LogoFinal.png" alt="" style="height:120px"></a>
            </div>
            <div class="col-xl-5 col-sm-5 col-6" style="text-align: right;">
                <br>
                <a href="{{ route('login') }}"><img src="img/LogoLogitoFinal.png" style="height:30px;"  id="salir" alt=""></a>
                <a href="{{ route('areaPersonal') }}"><img class="img-circle" id="fotoperfil" src="img/userimg/{{ Auth::user()->imagen}}" alt=""></a>
                <div id="nombrejugador"><p style="color: #00ff00; margin-right:30px;">{{ Auth::user()->name }}</p></div>
            </div>
        </div>
    </div>

    </div>
</header>

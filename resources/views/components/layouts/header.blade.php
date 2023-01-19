<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"

    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/header.css">
<script src="https://kit.fotawesome.com/9d49876e0a.js" crossorigin="anonymous"></script>
<style>
   
</style>
<header>
    <div class="container-fluid">
        <div class="row" style="background-color:	#252525 ">
            <div class="col-xl-7 col-sm-7 col-6" style="text-align:left"> <a href="{{ route('home') }}"><img
                        src="img/LogoFinal.png" alt="" style="height:120px"></a></div>
            <div class="col-xl-5 col-sm-5 col-6" style="text-align: right;">
                <br>
                <form action="{{ route('logout.destroy') }}">
                    @csrf
                    <button id="botonlog"><img src="img/LogoLogitoFinal.png" style="height:30px;"  id="salir" alt=""></button>
                </form>
                {{-- <a type="submit" href="{{ route('logout.destroy') }}"><img src="img/LogoLogitoFinal.png" style="height:30px;"  id="salir" alt=""></a> --}}
                {{-- <button type="button" id="botonlog" onclick="<href="{{ route('logout.destroy') }}">"<img src="img/LogoLogitoFinal.png" style="height:30px;"  id="salir" alt=""></button> --}}
                <a href="{{ route('areaPersonal') }}"><img src="img/avatar.png" style="height:80px" alt=""></a>
                <div id="nombrejugador">{{ Auth::user()->name }}</div>
            </div>
        </div>
    </div>    
</header>

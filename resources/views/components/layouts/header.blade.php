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
    #nombrejugador{

        color: #00ff00

    }
</style>
<header>
    <div class="container-fluid">
        <div class="row" style="background-color:	#252525 ">
            <div class="col-xl-7 col-sm-7 col-6" style="text-align:left"> <a href="{{ route('home') }}"><img
                        src="img/LogoFinal.png" alt="" style="height:120px"></a></div>
            <div class="col-xl-5 col-sm-5 col-6" style="text-align: right;">
                <br>
                <div>
                <a href="{{ route('login') }}"><img src="img/LogoLogitoFinal.png" style="height:30px; margin-left:80px;" alt=""></a>
                <a href="{{ route('areaPersonal') }}"><img src="img/avatar.png" style="height:80px" alt=""></a>
                </div>
                
                    <div id="nombrejugador">{{ Auth::user()->name }}</div>
                <div class="col-xl-3 col-sm-3 col-3">
                   
                </div>
                <div class="col-xl-3 col-sm-3 col-3">
                    

                </div>
            </div>
        </div>
    </div>

                    
                    {{-- <div id="inforpersonal">
                    <div>
                        </div>
                    
                    </div> --}}
                
                

    
</header>

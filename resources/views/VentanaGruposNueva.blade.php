

  <style>


    body{
        background-color: #252525
    }
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

      footer {
          background-color: #252525;
          bottom: 0px;
          width: 99%;

          /* bottom:-10px; */

      }

      ul {
          list-style: none;
      }

      a {
          color: white;
      }

      h3 {
          color: #00ff00;
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
      #article {


      }


  </style>



      <x-layouts.header />

    <main>

    <div class="container-fluid" style="background-color: #252525;  height:83vh; ">
        <div class="row" >
{{--
            @foreach ($grupos as $grupo )
            <div class="col-xl-4 col-sm-4 col-4  text-center" style="border: 1px solid #00ff00 ; border-radius:22px;">
                <h1 style="color: #00ff00">{{$grupo->Nombre}}</h1>
                <b style="color: #00ff00">4 Usuarios</b>
            </div>
            <br>
            <br>

            @endforeach

        </div>
        <br>
        <br>
        <br>
        <div class="row">

            @auth
            @if(Auth::user()->rol == "Profesor")
            <div class="offset-xl-4 col-xl-2 offset-sm-4  col-sm-2 offset-4  col-2 text-center" > <article id="article">
                <button>AgregarGrupo</button>
            </div>

            @endif
            @endauth
        </div> --}}

        @auth
            @if (Auth::user()->rol == "Profesor")

            <div class="row">


            </div>

            @endif
        @endauth





    </div>
    </main>



      <x-layouts.footer/>



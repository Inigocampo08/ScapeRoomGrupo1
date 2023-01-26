<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
=======


>>>>>>> 7424e81001cf11816a387acab081987af9724b79
<head>
  <meta charset="utf-8">
  <title>Area Personal</title>
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  {{-- <link rel="stylesheet" media="screen" href="css/style.css"> --}}
  <!-- CSS only -->
  <link rel="stylesheet" media="screen" href="/css/fondo.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

  <style>

    ¨*{
        margin: 0;
        padding: 0;
    }
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
  </head>

  <body>



      <x-layouts.header />
      <x-layouts.nav />
    <main>

    <div class="container-fluid">
        <div class="row" style="margin-top:60px">
        
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
            @if(Auth::user()->rol != "alumno")
            <div class="offset-xl-5 col-xl-2 offset-sm-5  col-sm-2 offset-5  col-2"> <article id="article">
                <button>AgregarGrupo</button>
            </article></div>
               
            @endif
            @endauth
        </div>

    </div>
    </main>
                     

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
   
      <!-- JavaScript Bundle with Popper -->
      {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}

  </body>
  <footer>
    <div class="container-fluid"  >
        <div class="row">
            <div class="col-xl-4 text-center"> <p style="color:#00ff00; text-decoration: none;">©2023 por Venenum</p></div>
            <div class="col-xl-4 text-center"> <p><a style="color:#00ff00; text-decoration: none;" href="mailto:ciprianclase@gmail.com">¿Tienes dudas? Pregúntanos</a><p></div>
            <div class="col-xl-4 text-center"> <p><a style="color:#00ff00; text-decoration: none;" href="https://www.google.com/maps/dir//cifp+txurdinaga/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0xd4e4fac87437727:0x364f27e82def0130?sa=X&ved=2ahUKEwjk2qLliL38AhXiRvEDHanuD1UQ9Rd6BAhZEAU">Como llegar</a><p>  </div>
        </div>

    </div>
</footer>
</html>

{{--
{{-- <div class="offset-xl-3 col-xl-6 col-10 offset-1 text-center "style="background-color:red; height: 500px; font-size:16px"> --}}
{{-- <div class="col-xl-4 col-4 text-center"><img src="/img/LogoFinal.png" ></div>
                  <div class="col-xl-8 col-8 text-center">
                    <label>Nombre:</label>
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="Nombre" required>
                    <br>
                    <label>Apellido:</label>
                    <input type="text" class="form-control" placeholder="Apellido" name="Apellido" value="Apellido" required>
                    <br>
                    <label>Email:</label>
                    <input type="text" class="form-control" placeholder="Email" name="Email" value="Email" required>
                    <br>
                    <label>Imagen:</label>
                    <input type="text" class="form-control" placeholder="Imagen" name="Imagen" value="Imagen" required> --}}

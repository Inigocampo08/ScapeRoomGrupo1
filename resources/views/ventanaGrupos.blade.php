<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Area Personal</title>
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  {{-- <link rel="stylesheet" media="screen" href="css/style.css"> --}}
  <!-- CSS only -->
  <link rel="stylesheet" media="screen" href="/css/fondo.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>


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
  </style>
  </head>

  <body>



      <x-layouts.header />
      <x-layouts.nav />

     
          <div class="container-fluid" style="margin-top: 60px" >
              <div class="row">
                  <div class=" offset-xl-2 col-12 col-sm-12 col-xl-2" style="height:700px;">
                      <img src="/img/avatar.png" style="height:150px;width:150px;"><br><br>
                      <h1 style="color: #00ff00">Admin</h1>
                    <div class="col-xl-12 col-12 col-sm-12 text-center " style=" border: 2px solid #00ff00; heigth:300px; ">
                        <h4 style="color: #00ff00">Puntuacion</h4>
                        <ul style="color: #00ff00">
                            <li>6900</li>
                            <li>5634</li>
                            <li>5223</li>
                            <li>1256</li>
                         
                      
        
                        </ul>
                      
                    </div>
                 </div>
                  <div class="col-12 col-sm-12 col-xl-7" style="width:800px; heigth:700px;">
                      <h3>Nombre:</h3>
                      <input type="text" class="campodetexto  form-control" placeholder="Nombre" name="nombre"
                          value="Nombre" width="20px" required>
                      <br>
                      <h3>Apellido:</h3>
                      <input type="text" class="campodetexto  form-control" placeholder="Apellido" name="Apellido"
                          value="Apellido" required>
                      <br>
                      <h3>Email:</h3>
                      <input type="text" class="campodetexto  form-control" placeholder="Email" name="Email"
                          value="Email" required>
                      <br>
                      <h3>Imagen:</h3>
                      <input type="file" name="foto" placeholder="FOTO" id="btn-foto" class="campodetexto">
                      <br><br><br>
                      <button type="submit" class="boton  btn">Guardar</button>
                  </div>
              </div>
        

          



      <!-- JavaScript Bundle with Popper -->
      {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}

  </body>
 
      
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

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!-- CSS only -->
    {{-- <link rel="stylesheet" media="screen" href="/css/fondo.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Puntuaciones</title>
    <style>
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
  
          /* footer {
              background-color: #252525;
              position: absolute;
              bottom: 0;
              width: 100%;
              height: 50px;
              color: white;
              z-index: 2;
              /* bottom:-10px; */
              display: flex;
          } */
  
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
  
      {{-- <div id="particles-js"> --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-5 col-xl-5" style="background-color: #00ff00;height:480px;text-align:center;">
                    <img class="img-fluid" src="/img/avatar.png" style="height: 150px; width:150px; text-align:center;margin-top:50px;"><br><br>
                  <h1 style="color: #252525;">Admin</h1>
                  
                  <div class="col-12 col-sm-12 col-xl-12" style="text-align:center;border:3px solid #252525;">
                    <h1 style="color: #252525"><u>High Score</u></h1>
                    <br><br><br>
                    <table style="color: #252525;margin-left:50px;">
                      <tr>
                        <th style="width: 150px"><h4>Puntuacion</h4></th>
                        <th style="width: 150px"><h4>Tiempo</h4></th>
                      </tr>
                      <td style="width: 150px"><h3>1250 pts</h3></td>
                      <td style="width: 150px"><h3>47:07 mins</h3></td>
                    </table>
  
                    </div>
                </div>
                <div class="col-12 col-sm-7 col-xl-7" style="background-color:aqua; height:480px;">
                    <h1 style="color: #00ff00"><u>High Score</u></h1>
                  <br><br><br>
                  <table style="color: #00ff00;margin-left:50px;">
                    <tr>
                      <th style="width: 150px"><h4>Puntuacion</h4></th>
                      <th style="width: 150px"><h4>Tiempo</h4></th>
                    </tr>
                    <td style="width: 150px"><h3>1250 pts</h3></td>
                    <td style="width: 150px"><h3>47:07 mins</h3></td>
                  </table>

                </div>
            </div>
                
        </div>
  
        <footer>
            <div class="container-fluid">
                <div class="row" style="background-color:#252525; height:60px;">
                    <div class="col-xl-4 col-sm-4 col-4">
                        <p class="fs-6">©2023 por Venenum</p>
                    </div>
                    <div class="col-xl-4 col-sm-4 col-4">
                        <p class="fs-6"><a href="mailto:ciprianclase@gmail.com">¿Tienes dudas? Pregúntanos</a>
                        <p>
                    </div>
                    <div class="col-xl-4 col-sm-4 col-4">
                        <p class="fs-6"><a
                                href="https://www.google.com/maps/dir//cifp+txurdinaga/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0xd4e4fac87437727:0x364f27e82def0130?sa=X&ved=2ahUKEwjk2qLliL38AhXiRvEDHanuD1UQ9Rd6BAhZEAU">Como
                                llegar</a>
                        <p>
                    </div>
  
                </div>
            </div>
        </footer>
    {{-- </div> --}}
  

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>
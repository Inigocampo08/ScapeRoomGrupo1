
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        background-color: #252525;
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

 

        ul {
            list-style: none;
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
        table{
            display: flex;
            justify-content: center;

          }
        #principal{
          style="background-color: #252525;
          min-height: calc(100vh -90px -80px);
        }
  </style>


    <x-layouts.header />
  <main>
    <div class="container-fluid" id="principal" style="background-color: #252525; height: 83vh;">
      <div class="row">
          <div class="col-12 col-sm-5 col-xl-5" style="background-color: #252525;height:480px;text-align:center;">
              <img class="img-fluid" src="/img/avatar.png" style="height: 150px; width:150px; text-align:center;margin-top:50px;"><br><br>
            <h1 style="color: #00ff00;">{{Auth::user()->name}}</h1>
            <br>
            <div class="col-12 col-sm-12 col-xl-12" style="text-align:center;">
              <h1 style="color: #00ff00"><u>High Score</u></h1>
              <table style="color: #00ff00;border:3px solid #00ff00;text-align:center;">
                <tr>
                  <th><h4>Puntuacion</h4></th>
                  <th><h4>Tiempo</h4></th>
                </tr>
                <tr>
                <td><h3 style="color: #00ff00;">1250 pts</h3></td>
                <td><h3 style="color: #00ff00;">47:07 mins</h3></td>
                </tr>
              </table>

              </div>
          </div>
          <div class="col-12 col-sm-7 col-xl-7" style="background-color:#252525; ;text-align:center;">
              <br>
              <h1 style="color: #00ff00"><u>Tus Puntuaciones</u></h1>
          <br><br>
          <table style="color: #00ff00;border: 3px solid #00ff00;text-align:center;">
            <tr>
              <th><h4>Nº</h4></th>
              <th><h4>Puntuacion</h4></th>
              <th><h4>Tiempo</h4></th>
            </tr>
            <tr>
            <td><h3 style="color: #00ff00;">1</h3></td>
            <td><h3 style="color: #00ff00;">1250 pts</h3></td>
            <td><h3 style="color: #00ff00;">47:07 mins</h3></td>
            </tr>
            <tr>
              <td><h3 style="color: #00ff00;">2</h3></td>
              <td><h3 style="color: #00ff00;">860 pts</h3></td>
              <td><h3 style="color: #00ff00;">54:37 mins</h3></td>
              </tr>
          </table>

          </div>
      </div>

  </div>
  </main>
    
  <x-layouts.footer/>


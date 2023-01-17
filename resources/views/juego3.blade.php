<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        restartBtn.on("click", function() {
  //Limpiamos el contenedor de la palabra, de la ventana juego.
  palabraContainer.html("");
  //Eliminamos el teclado.
  tecCont.html("")
  //Limpiamos la seccion de informacion de la ventana juego.
  infoJuego.html("");
  //Enceramos los contadores de aciertos y fallas.
  contadorAciertos = 0;
  contadorFallas = 0;
  //Cerramos la ventana: fin del juego.
  finJuegoContainer.fadeOut();
  //Borramos el muñeco del ahorcado
  pathsOcultos.hide();
  //Cerramos la ventana del juego
  juegoContainer.hide();
  //Mostramos la ventana de inicio
  inicioContent.fadeIn();
  //Borramos la palabra ingresada en el input palabra.
  palabraIngresada.val("");
  //Borramos la pista ingresada en el input letra
  letraIngresada.val("");
  //Limpiamos la sección de información de la ventana inicio
  infoInicio.html("");
});
function comprobarTeclado() {
  //---  1  ---
  var tecla = $('.tecla');
  //---  2  ---
  tecla.each(function() {
    $(this).on("click", function() {
      comprobarLetra($(this), null);
    });
  });
}
function comprobarLetra(le, pista) {
  //---  1  --- 
  var valorCaracter = "";
  var arrayAlfabeto = [];
  //---  2  ---
  if (pista !== null) {
    valorCaracter = pista
  } else {
    valorCaracter = le.text();
  }
  //---  3  ---
  var letraMostrada = document.querySelectorAll('.letra');
  //---  4  ---
  var l = palabra.indexOf(valorCaracter);
  //---  5  ---
  var desactivarTecla = le
  //---  6  ---
  if (l != -1) {
    //---  6.1  ---
    if (le !== null) {
      //---  6.1.1  ---
      desactivarTecla.addClass("tecla-desactivada");
      infoJuego.html("")
    } else {//---  6.2  ---
      //---  6.2.1  ---
      var tecla = $('.tecla');
      //---  6.2.2  ---
      var arrayLetras = tecla.each(function() {
        return arrayAlfabeto.push($(this));
      });
      console.log(arrayLetras)
      //---  6.2.3  ---
      var cadenaAlfabeto = arrayLetras.text();
      //---  6.2.4  ---
      cadenaAlfabeto = cadenaAlfabeto.indexOf(valorCaracter);
      //---  6.2.5  ---
      tecla[cadenaAlfabeto].classList.add("tecla-desactivada")
    }
    //---  6.3  ---
    while (l != -1) {
      letraMostrada[l].innerHTML = valorCaracter;
      l = palabra.indexOf(valorCaracter, l + 1);
      contadorAciertos++;
    }
    //---  6.4  ---
    if (contadorAciertos == palabra.length) {
    finJuegoContainer.fadeIn();
    finJuegoInfo.html("<h2>Felicidades, ganaste.</h2>");
    }
  } else {//---  7  ---
    //---  7.1  --- 
    infoJuego.html(`Letra ingresada incorrecta, puedes fallar <b>${(pathsOcultos.length - contadorFallas ) - 1}</b> veces más.`);
    //---  7.2  ---
    pathsOcultos[contadorFallas].style.display = 'initial';
    contadorFallas++;
    //---  7.3  --- 
    if (contadorFallas == pathsOcultos.length) {
      finJuegoContainer.fadeIn();
      finJuegoInfo.html(`<h2>!Perdiste!. La palabra era:</h2> <b>"${palabra}"<b>`)
    }
  }
}
function renderizarPalabra(palabra){
  for (var i = 0; i < palabra.length; i++) {
      palabraContainer.append(`<p class = "letter"></p>`);
    }
}
        </script>
    <style>
        *{
  margin:0;
  padding: 0;
  box-sizing:border-box;
}
.contenedor-general {
  width: 100%;
  max-width: 1024px;
  margin: 0 auto;
}

h1.titulo-principal {
  text-align: center;
  color: white;
  background: red;
  margin-bottom:0;

}

.contenedor-general h2 {
  text-align: center;
  font-size: 1.5rem;
  line-height: 1.7rem;
}

.inicio-container,
.juego-container,
.ventana-container {
  padding: 2rem;


}

.inicio-container {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background: repeating-radial-gradient(#d4d4d4, #0000001a 100px);
  gap:1rem;
}

input#inputPalabra,
input#inputLetra {
  font-size: 2rem;
  text-align: center;
  max-width: 80%;
  background: white;
  border-radius: 30px;
  border: 2px solid;
}

input#inputLetra {
  width: 3rem;

}

div#inicioContent h3 {
  font-size: 1.2rem;
  text-align: center;
  margin-bottom:0;
}

div#inicioContent p {
  text-align: center;
}

div#juegoContainer {
  background: #1b1b1c17;
}

div#palabraContainer {
  width: 100%;
  display: flex;
  justify-content: center;
  gap: 1rem;
  margin: 2rem 0;
}

div#infoJuego {
  text-align: center;
  font-size: 1.7rem;
  line-height:1.8rem;
  margin-bottom: 2rem;
}

.button-container {
  display: flex;
  justify-content: flex-start;
  align-items: center;
}

.juego-container_td {
  display: grid;
  grid-template-columns: 50% 50%;
  gap: 1rem;
}


div#juegoContent {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  align-items: center;
}

p.letra {
  border-bottom: 2px solid black;
  font-size: 4rem;
  min-width: 2rem;
  min-height: 4rem;
}

div#tecladoContainer {
  display: flex;
  gap: 0.5rem;
  flex-wrap: wrap;
  justify-content: center;
}

.tecla {
  display: flex;
  background: red;
  color: white;
  align-items: center;
  justify-content: center;
  justify-content: center;
  font-size: 2rem;
  font-weight: bold;
  padding: 1rem;
  cursor: pointer;
  transition: all .3s;
  border-radius: 8px;
  box-shadow: -1px 4px 0px 1px #9f9f9f;
}

.tecla:hover {
  opacity: 0.4;
  box-shadow: none;
}

.tecla-desactivada {
  background: grey;
  pointer-events: none;
}

div#dibujoContainer {
  display: flex;
  align-items: flex-start;
  justify-content: center;
  height: min-content;
  background: #6060601f;
  box-shadow: inset 2px 2px 20px 1px black;
  /*  animation: mymove 1s infinite; */
}

@keyframes mymove {
  0% {
    background: #ff000030;
  }

  50% {
    background: #0000ff30;
  }

  100% {
    background: #6060601f;
  }
}

svg#svg5 {
  width: 60%;
}

.parte {
  background: black;
}

.ventana-container {
  position: absolute;
  top: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  gap: 3rem;
  height: 100%;
  align-content: center;
  flex-direction: column;
  background: rgb(0 0 0 / 52%);
  backdrop-filter: blur(9.9px);
  -webkit-backdrop-filter: blur(9.9px);
  border: 1px solid rgba(166, 166, 166, 0.05);
}

.fin-juego-info {
  color: white;
  font-size: 3rem;
  text-align: center;
}

a.button {
  background: red;
  padding: 1rem 2rem;
  color: white;
  font-weight: bold;
  font-size: 2rem;
  cursor: pointer;
  border-radius: 36px;
  text-align: center;
  line-height: 2rem;
  text-decoration: none;
}

a.button:hover {
  background: blue;

  border-radius: 36px;
}

.mostrar {
  display: initial;

}

@media screen and (max-width: 800px) {
  .juego-container_td {
    grid-template-columns: 100%;
    gap: 2rem;
  }     
}

@media screen and (max-width: 440px) {
  p.letra {
    font-size: 1.7rem;
    min-width: 1.3rem;
    min-height: 2rem;
  }
  
  .tecla {
    padding: 0.5rem;
    font-size: 1.4rem;
   }
}
    </style>
  </head>
  <body>
    <div class="contenedor-general">
      <h1 class="titulo-principal">Juego del ahorcado</h1>
      <div class="inicio-container" id="inicioContent">
        <h2 class="inicio-tittle">Ingrese una palabra, una pista(opcional) y presione el boton jugar para continuar</h2>
        <h3>Palabra:</h3>
        <input type="text" name="" id="inputPalabra">
        <h3>Pista:</h3>
        <input type="text" name="" id="inputLetra">
        <p id="infoInicio"></p>
        <div class="button-container">
          <span href="" class="button" id="startBtn">Jugar</span>
        </div>
      </div>
      <div class="juego-container" id="juegoContainer">
        <div class="palabra-container" id="palabraContainer"></div>
        <div class="info-container" id="infoJuego"></div>
        <div class="juego-container_td">
          <div class="dibujo-container" id="dibujoContainer">
            <?xml version="1.0" encoding="UTF-8" standalone="no"?>
            <!-- Created with Inkscape (http://www.inkscape.org/) -->
            <svg viewBox="0 30 210 257" version="1.1" id="svg5" sodipodi:docname="ahorcado.svg" inkscape:version="1.1 (c68e22c387, 2021-05-23)" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
              <sodipodi:namedview id="namedview7" pagecolor="#ffffff" bordercolor="#999999" borderopacity="1" inkscape:pageshadow="0" inkscape:pageopacity="0" inkscape:pagecheckerboard="0" inkscape:document-units="mm" showgrid="false" inkscape:zoom="0.59717191" inkscape:cx="449.61927" inkscape:cy="585.2586" inkscape:window-width="1024" inkscape:window-height="705" inkscape:window-x="-4" inkscape:window-y="-4" inkscape:window-maximized="1" inkscape:current-layer="g2306" />
              <defs id="defs2">
                <inkscape:path-effect effect="spiro" id="path-effect4595" is_visible="true" lpeversion="1" />
                <inkscape:path-effect effect="spiro" id="path-effect3739" is_visible="true" lpeversion="1" />
                <inkscape:path-effect effect="spiro" id="path-effect3358" is_visible="true" lpeversion="1" />
                <inkscape:path-effect effect="spiro" id="path-effect3098" is_visible="true" lpeversion="1" />
                <inkscape:path-effect effect="spiro" id="path-effect2310" is_visible="true" lpeversion="1" />
                <inkscape:path-effect effect="spiro" id="path-effect2290" is_visible="true" lpeversion="1" />
                <inkscape:path-effect effect="bspline" id="path-effect1303" is_visible="true" lpeversion="1" weight="33.333333" steps="2" helper_size="0" apply_no_weight="true" apply_with_weight="true" only_selected="false" />
              </defs>
              <g inkscape:label="Capa 1 copia 1" inkscape:groupmode="layer" id="g3354">
                <rect style="fill:#800000;stroke-width:0.340253" id="rect3336" width="20.050634" height="229.00818" x="40.759335" y="44.181683" />
                <rect style="stroke-width:0.293289;fill:#800000" id="rect3338" width="117.79747" height="26.943035" x="6.2773501e-07" y="270.24048" />
                <rect style="fill:#800000;stroke-width:0.199059" id="rect3340" width="145.56366" height="13.158227" x="25.689871" y="48.873417" />
                <rect style="fill:#ac9393;stroke-width:0.280633" id="rect3342" width="5.6392426" height="21.303799" x="158.52531" y="62.031643" />
                <ellipse style="fill:#2b0000;stroke-width:0.259699" class="path-ahorcado" id="circle3344" cx="161.91776" cy="90.449371" rx="18.170887" ry="17.506296" />
                <path style="fill:#2b0000;stroke-width:0.22153" class="path-ahorcado" d="m 159.50181,169.98273 c -5.26097,-0.39642 -9.08599,-2.80389 -11.06985,-6.96739 -1.10287,-2.31455 -1.87748,-5.19517 -2.43408,-9.05179 -0.86613,-6.00137 -0.99601,-8.96171 -0.99623,-22.70686 -2.3e-4,-14.25923 0.0534,-15.07598 1.18724,-18.07229 0.88829,-2.34747 2.66859,-3.7977 5.57855,-4.54426 1.88776,-0.48431 14.15044,-0.71511 16.86965,-0.31751 4.75737,0.69562 6.53721,2.42603 7.63907,7.42694 0.27998,1.27071 0.3597,3.96993 0.4415,14.94854 0.21246,28.51407 -0.84151,36.34571 -5.17678,38.46676 -0.89163,0.43623 -1.71906,0.61915 -3.44924,0.76249 -2.19883,0.18218 -6.53602,0.21013 -8.58983,0.0554 z" id="path3346" />
                <path style="fill:#2b0000;stroke-width:0.22153" class="path-ahorcado" d="m 122.61701,146.35618 c -0.99826,-0.46142 -1.48013,-1.12749 -1.60276,-2.21547 -0.23792,-2.11082 0.84823,-3.63139 4.32579,-6.05597 7.40217,-5.16084 13.07762,-11.83659 17.7892,-20.92456 1.96428,-3.78881 2.86046,-4.84432 4.11305,-4.84432 1.67636,0 2.49526,1.31069 2.0527,3.28547 -0.3479,1.55238 -2.51701,6.90111 -4.28255,10.56017 -2.84366,5.89344 -5.20447,9.38384 -8.94075,13.21869 -4.97525,5.1065 -10.87801,8.16697 -13.45468,6.97599 z" id="path3348" />
                <path style="fill:#2b0000;stroke-width:0.22153" class="path-ahorcado" d="m 194.90643,146.6698 c -4.08974,-1.30781 -9.54959,-5.70836 -13.36497,-10.77195 -2.89158,-3.83758 -5.59359,-8.93886 -8.20791,-15.49614 -1.84492,-4.62749 -2.03372,-5.87445 -1.05525,-6.96956 0.50243,-0.56231 0.81707,-0.71754 1.45442,-0.71754 1.29246,0 1.997,0.68731 3.28205,3.20183 4.84578,9.48197 10.32838,16.40987 16.71035,21.11547 1.31047,0.96625 2.9527,2.17685 3.64939,2.69024 1.50259,1.10724 2.32387,2.22799 2.67798,3.65444 0.2312,0.93133 0.20779,1.14919 -0.2179,2.02856 -0.80686,1.66676 -2.39568,2.07448 -4.92816,1.26465 z" id="path2429" />
                <path style="fill:#2b0000;stroke-width:0.31329" class="path-ahorcado" d="m 147.28004,207.35172 c -1.34115,-1.1285 -1.64384,-2.50257 -1.22962,-5.58179 0.43223,-3.2131 0.49069,-14.052 0.14554,-26.98035 -0.37604,-14.08508 0.0575,-17.3228 2.47314,-18.46909 0.93033,-0.44147 1.18988,-0.44923 2.11393,-0.0631 1.48964,0.62241 2.8327,2.39544 4.17167,5.50719 1.63592,3.80184 1.72021,5.68672 0.47009,10.5119 -1.10105,4.24981 -1.20394,6.41449 -0.5066,10.6587 0.62904,3.82848 0.59003,6.39109 -0.1488,9.7763 -0.48965,2.24349 -0.60701,3.8164 -0.54826,7.34767 0.0673,4.04744 0.0109,4.60177 -0.56876,5.58857 -1.46065,2.48643 -4.48224,3.29444 -6.37233,1.70403 z" id="path3217" />
                <path style="fill:#2b0000;stroke-width:0.31329" class="path-ahorcado" d="m 174.93061,209.12396 c 1.34115,-1.1285 1.64384,-2.50257 1.22962,-5.58179 -0.43223,-3.2131 -0.49069,-14.052 -0.14554,-26.98035 0.37604,-14.08508 -0.0575,-17.3228 -2.47314,-18.46909 -0.93033,-0.44147 -1.18988,-0.44923 -2.11393,-0.0631 -1.48964,0.62241 -2.8327,2.39544 -4.17167,5.50719 -1.63592,3.80184 -1.72021,5.68672 -0.47009,10.5119 1.10105,4.24981 1.20394,6.41449 0.5066,10.6587 -0.62904,3.82848 -0.59003,6.39109 0.1488,9.7763 0.48965,2.24349 0.60701,3.8164 0.54826,7.34767 -0.0673,4.04744 -0.0109,4.60177 0.56876,5.58857 1.46065,2.48643 4.48224,3.29444 6.37233,1.70403 z" id="path3352" />
                <path style="fill:#916f6f;stroke:#000000;stroke-width:0.264583px;
         stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" class="path-ahorcado" d="m 154.26902,103.02365 c 1.80221,1.62505 3.6223,3.39548 5.95253,4.07279 1.81143,0.52651 3.79452,0.32294 5.53824,-0.39675 1.74372,-0.71969 3.25704,-1.93253 4.48707,-3.36275 0.14485,-0.16843 0.2883,-0.34205 0.46994,-0.46994 0.19917,-0.14022 0.43936,-0.21971 0.68257,-0.23308 0.24321,-0.0134 0.48884,0.0386 0.70897,0.14286 0.44026,0.20854 0.76631,0.62244 0.91834,1.08526 0.15204,0.46283 0.13982,0.96967 0.0198,1.44182 -0.11998,0.47215 -0.34361,0.91259 -0.60662,1.32264 -1.31217,2.04577 -3.54613,3.3099 -5.79589,4.22943 -1.33919,0.54736 -2.72294,1.00381 -4.15146,1.23269 -1.42851,0.22887 -2.90655,0.22531 -4.30739,-0.13617 -2.02578,-0.52274 -3.78374,-1.75524 -5.4826,-2.97627 -1.04503,-0.7511 -2.11094,-1.53197 -2.81124,-2.6117 -0.35014,-0.53987 -0.60138,-1.15089 -0.67638,-1.78998 -0.075,-0.63909 0.0331,-1.3068 0.35471,-1.86414 0.3059,-0.53012 0.81462,-0.95385 1.40981,-1.09652 0.60477,-0.14497 1.25066,0.005 1.80258,0.29179 0.55192,0.28662 1.02511,0.70156 1.48698,1.11802 z" id="path3737" inkscape:path-effect="#path-effect3739" inkscape:original-d="m 154.26902,103.02365 c 1.09625,0.46967 3.96862,2.71545 5.95253,4.07279 1.98391,1.35733 6.68381,-2.50607 10.02531,-3.7595 3.34151,-1.25343 0.31356,-0.31302 0.46994,-0.46994 0.15638,-0.1569 1.149,2.5066 1.7231,3.7595 0.5741,1.2529 -3.86366,2.81989 -5.79589,4.22943 -1.93222,1.40955 -5.63897,0.73128 -8.45885,1.09652 -2.81989,0.36524 -3.65481,-1.98391 -5.4826,-2.97627 -1.8278,-0.99235 -2.08834,-4.17695 -3.13291,-6.26582 -1.04457,-2.08888 0.94014,-0.73075 1.40981,-1.09652 0.46967,-0.36577 2.1933,0.94014 3.28956,1.40981 z" />
              </g>
            </svg>
          </div>
          <div class="left-container" id="juegoContent">
            <div class="teclado-container" id="tecladoContainer"></div>
          </div>
        </div>
      </div>
      <div class="ventana-container" id="finJuegoContainer">
        <div class="fin-juego-info" id="finJuegoInfo"></div>
        <span href="" class="button" id="restartBtn">Volver a jugar</span>
      </div>
    </div>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js' type='text/javascript'></script>
  </body>
</html>
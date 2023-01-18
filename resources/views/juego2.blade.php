<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Entrando al Almacen</title>
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" con  {{-- <link rel="stylesheet" href="menuPrincipal.css"> --}}
tent="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  {{-- <link rel="stylesheet" media="screen" href="/css/fondo.css"> --}}
  {{-- <link rel="stylesheet" href="menuPrincipal.css"> --}}
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

            <link href="./css/bootstrap.min.css" rel="stylesheet">
            <link href="./css/style.css" rel="stylesheet">
    </head>

    <body>
        

        <x-layouts.header />
        <div id="todo">
                <br><br>
                <div id="explicacion" class="container">
                    <div class="col-xl-10 col-sm-10 col-10 offset-1">
                        <br>
                        <p style="color: black">Debes acertar la palabra oculta que se refieren a los Microorganismos estudiados en clase,
                        las palabras son compuestas pero estan sin espacio. Debes ir eligiendo letra a letra hasta adivinar el Microorganismo.
                        SOLO TIENES 8 INTENTOS </p>
                        <br>
                    </div>
                </div>
                <br>
                <main role="main" class="container" id="app">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-center">Juego de memorama</h1>
                            <p>
                                <span class="h5">Intentos: </span>
                                {{intentos}}/{{MAXIMOS_INTENTOS}}&nbsp;<span class="h5">Aciertos:
                                </span> {{aciertos}}
                            </p>
                        </div>
                    </div>
                    <div v-for="(fila, indiceFila) in memorama" :key="indiceFila"
                        class="row">
                        <div :key="indiceFila+''+indiceImagen" class="col-3"
                            v-for="(imagen, indiceImagen) in fila">
                            <div class="mb-4">
                                <img @click="voltear(indiceFila, indiceImagen)"
                                    :class="{'girar': imagen.mostrar}"
                                    :src="(imagen.mostrar ? imagen.ruta :
                                    NOMBRE_IMAGEN_OCULTA)" class="card-img-top img-fluid
                                    img-thumbnail">
                            </div>
                        </div>
                    </div>
                </main>
            
                <script src="./js/sweetalert2.all.min.js"></script>
                <script src="./js/vue.min.js"></script>
                <script src="./js/script.js"></script>
        
            <br><br>
        </div>
        <x-layouts.footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html> 
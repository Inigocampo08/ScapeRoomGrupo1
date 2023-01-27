<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ahorcado</title>
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


	<script>
		window.onload = updateClock;
	
	var minutos=1;
	var segundos = 30;
	
	function updateClock() {
		if(segundos<10 && segundos>0)
		{
			segundos="0"+segundos;
		}
	  document.getElementById('countdown').innerHTML = minutos +":"+ segundos;
	  if(segundos==0 && minutos==0){
		var dato=document.getElementById('countdown').innerHTML="Se acabo el tiempo";
		dato.style.color="red";
	  }else{
		
			segundos-=1;
			if(segundos==0 && minutos!=0)
			{
				segundos=59;
				minutos-=1;
			}
			setTimeout("updateClock()",1000);
			}
	}
		</script>

  @vite(['resources/js/logica.js', 'resources/js/juego3.css'])
</head>

<body>
  <x-layouts.header />
	<div id="todo">
		<br>
            <div style="row">
                <div class="col-xl-12 col-sm-12 col-12">
                    <h1 class="text-center" style="color: black;">Juego de Ahorcado</h1>
                </div>
                <div class="col-xl-12 col-sm-12 col-12 text-right">
                    <h1 class="text-center" id="countdown" style="color: black"></h1>
                </div>
            </div>
		<br>
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
	<div id="app" class="container">

	</div>

<br><br>
</div>
<x-layouts.footer />

  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Primeros pasos con Vue</title>
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


  @vite(['resources/js/logica.js', 'resources/js/juego3.css'])
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
	<div id="app" class="container">

	</div>

<br><br>
</div>
<x-layouts.footer />

  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>

	{{-- <script type="text/javascript" src="/js/logica.js"></script> --}}

</body>
</html>


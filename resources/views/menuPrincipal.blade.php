<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" media="screen" href="/css/fondo.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    

    <x-layouts.header />

    <div id="particles-js">
        
            <div class="row" style="position: absolute">
                <div class="offset-md-3 col-md-5  text-center "style=" height: 400px; font-size:16px">
                    <h1 style="font-size: 45px; color:white;">Explicacion Juego</h1>
                    <p style="font-size: 22px;  color:white;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium accusamus, earum dignissimos, recusandae atque eum cupiditate temporibus, reprehenderit repellendus commodi voluptas doloremque dolorum omnis blanditiis ex architecto consectetur enim illo. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit doloremque exercitationem voluptatem officia alias eius impedit recusandae aperiam, facilis, quia magnam dignissimos vero expedita placeat voluptates? Architecto excepturi nesciunt dicta.</p>
                </div>
            
                <div class=" col-md-2 text-center  "style=" height: 400px;">
                    <button style="margin-top: 150px; background-color:transparent; border:none; color:white;">
                        <h1><a href="{{ route('ventanaPrueba')}}" style="text-decoration:none">JUGAR</h1>
                    </button>
                </div>
             </div>
       
        <x-layouts.footer />


    <script src="/js/particles.min.js"></script>
    <script src="/js/particlesjs-config.json"></script>

<!-- count particles -->

<!-- particles.js container -->
</div>

{{-- <!-- scripts -->
<script src="../particles.js"></script>
<script src="js/app.js"></script>
<script src="../../js/particles.min.js"></script>
<script src="../../js/particlesjs-config.json"> </script>

<!-- stats.js -->
<script src="js/lib/stats.js"></script> --}}
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>

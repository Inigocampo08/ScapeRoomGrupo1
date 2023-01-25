<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <title>Login</title>
</head>

<body class="text-center">
    <div id="particles-js">
        <div id="main" class="form-signin w-100 m-auto">
            <form action="{{ route('login.store') }}" method="POST" class="º">
                @csrf
                <img class="mb-4" src="img/LogoFinal.png" alt="" width="275" height="225">
                <br>
                <input type="text" name="nombre" class="campodetexto" placeholder="NOMBRE">
                <input type="password" name="contraseña" class="campodetexto" placeholder="CONTRASEÑA">
                <br>
                <br>
                <div id="grupobotones">
                    <div id="btn-submit"><input type="submit" class="boton" name="enviar" id="btn1"  value="ENTRAR">ENTRAR</a></div>
                    <div id="btn-registro"><a type="submit" class="boton" name="registrar" id="btn2" href="{{ route('register')}}" value="REGISTRAR">REGISTRARSE</a></div>
                </div>
            </form>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="/js/particles.min.js"></script>
    <script src="/js/particlesjs-config.json"></script>
</body>

</html>

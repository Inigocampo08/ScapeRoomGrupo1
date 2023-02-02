<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/register.css">
    <title>Register</title>
</head>

<body class="text-center">
    <div id="particles-js">
        <div id="main" class="form-signin w-100 m-auto">
            <form action="{{ route('register.store') }}" method="POST" class="º" enctype="multipart/form-data">
                @csrf
                <div><img class="mb-4" src="/img/LogoFinal.png" alt="" width="275" height="225"></div>
                <br>
                <div id="grupoinputs1">
                    <div><input type="text" name="nombre" class="campodetexto" placeholder="USUARIO"></div>
                    <div><input type="text" name="apellido" class="campodetexto" placeholder="APELLIDO"></div>
                </div>
                <div id="diverror1">
                    <div id="error1">
                        @error('nombre')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </div>
                    <div id="error2">
                        @error('apellido')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                hola

                <br>
                <div id="grupoinputs2">
                    <div><input type="password" name="contraseña" class="campodetexto" placeholder="CONTRASEÑA"></div>
                    <div><input type="email" name="email" class="campodetexto" placeholder="EMAIL"></div>
                </div>
                <div id="diverror2">
                    <div id="error3">
                        @error('contraseña')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </div>
                    <div id="error4">
                        @error('email')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <br>
                <div id="grupoinputs3">
                    <div><input accept="image/png,image/jpeg,image/jpg" type="file" name="foto" placeholder="FOTO"
                            id="btn-foto"></div>
                    <div id="gruporadio">
                        <div><label for="Profesor" class="etiquetaradiobutton">Profesor  <input type="radio"
                                    class="grupodebotonesradio" name="rol" value="Profesor" id=""></label>
                        </div>
                        <div><label for="Profesor" class="etiquetaradiobutton">Alumno  <input
                                    type="radio"class="grupodebotonesradio" name="rol" value="alumno"
                                    id=""></label>
                        </div>
                    </div>
                </div>
                <div id="diverror3">
                    <div id="error5">
                        @error('foto')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <br>
                <div id="grupobotones">
                    <div id="btn-submit"><a type="submit" class="boton" name="volver" id="btn2"
                            href="{{ route('login') }}" value="LOGIN">LOGIN</a></div>
                    <div id="btn-register"><input type="submit" value="REGISTRARSE" class="boton" name="registrar">
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

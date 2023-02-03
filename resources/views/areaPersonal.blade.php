
<style>
    ¨*{

}
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
  bottom: 0px;
  /* bottom:-10px; */

}
/* footer {
    background-color: #252525;
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 50px;
    color: white;
    z-index: 2;
     bottom:-10px;
    display: flex;
} */

footer,a,h3 {
    color: #00ff00;
}
ul {
    list-style: none;
}

.campodetexto {

    padding: 5px;
    width: 75vh;
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

#fotoperfil{

    border-radius:300px;
    border:10px solid #252525;

}
#principal{
    background-color:#252525;
    min-height:calc(100vh - 100px - 80px) ;
}
</style>
<body>
</head>
    <body>

        <x-layouts.header />


            <div class="container-fluid" id="principal" >
                <br><br><br><br><br>
                <div class="row">
                    <div class="col-12 col-sm-4 offset-xl-2 col-xl-4" style="height:280px;text-align:center;background-color: #252525;">
                        <img src="img/userimg/{{ Auth::user()->imagen}}" id="fotoperfil" style="height:170px;width:170px;"><br><br>

                        <h1 style="color: white;">{{Auth::user()->name}}</h1>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-4 text-center" style="background-color:#252525; height:320px;">
                        <h3 >Nombre:</h3>
                        <h4 style="color: white;">{{Auth::user()->name}}</h4>
                        <br>
                        <h3>Apellido:</h3>
                        <h4 style="color: white;">{{Auth::user()->apellidos}}</h4>
                        <br>
                        <h3>Email:</h3>
                        <h4 style="color: white;">{{Auth::user()->email}}</h4>
                        <br>
                       <!-- Button trigger modal -->
                       <button class="btn " data-bs-toggle="modal" data-bs-target="#botonEditar" style="background-color: #00ff00">
                       Editar
                    </button>
                    </div>
                    <div class="modal" id="botonEditar">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-tittle">Editar usuario</h5>
                                    <button class="btn btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                             <form action="{{ route('user.update', Auth::user()->id) }}" method="POST" >
                                        @csrf
                                        {{ method_field('PUT')}}
                                        <label>Nombre:</label>
                                        <input type="text" class="form-control" name="nombre" value="{{Auth::user()->name}}" required>
                                        <br>
                                        <label>Apellido:</label>
                                        <input type="text" class="form-control"  name="apellido" value="{{Auth::user()->apellidos}}" required>
                                        <br>
                                        <label>Email:</label>
                                        <input type="text" class="form-control" name="email" value="{{Auth::user()->email}}" required>
                                        <br>
                                       



                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success">ACTUALIZAR</button>
                             </form>
                                    <button class="btn btn-success" data-bs-dismiss="modal">CANCELAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <br><br>
            </div>
           
            </div>
           



       
        <x-layouts.footer/>
    </body>
   
</html>

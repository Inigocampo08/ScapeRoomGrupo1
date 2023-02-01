

  <style>

  
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
      #contendorPrincipal {
        
        min-height: calc(100vh -90px -80px);
        background-color: #252525;
      }
     
    
  </style>



      <x-layouts.header />
  
    <main >

    <div class="container-fluid" id="contendorPrincipal">
        <br>
        <br>
        <div class="row" >
            @auth
            @if (Auth::user()->rol == "Profesor")
            @foreach ($grupos as $grupo )
               
            <div class="col-xl-3 offset-sm-2 col-sm-3 offset-xl-2  offset-1 col-10  text-center" style="border: 2px solid #00ff00 ; border-radius:22px; heigth:70vh">
                <br>
                <h1 style="color: #00ff00">{{$grupo->Nombre}}</h1>
                <br>
                <b style="color: #00ff00">4 Usuarios</b>
                <br>
                <br>
            </div>
            <br>
            <br>
            @endforeach 
            @endif
            @endauth
          
            @auth
            @if (Auth::user()->rol == "Alumno")
            @foreach ($grupos as $grupo )
               
            <div class="col-xl-3 offset-sm-2 col-sm-3 offset-xl-2  offset-1 col-10  text-center" style="border: 2px solid #00ff00 ; border-radius:22px; heigth:70vh">
                <br>
                <h1 style="color: #00ff00">{{$grupo->Nombre}}</h1>
                <br>
                <b style="color: #00ff00">4 Usuarios</b>
                <br>
                <br>
            </div>
            <br>
            <br>
            @endforeach 
            @endif
            @endauth
            
        </div>
       <br>
        <div class="row">
            
            @auth
            @if(Auth::user()->rol == "Profesor")
            <div class=" col-xl-12   col-sm-12   col-12 text-center" > <article id="article">
                <button class="btn" data-bs-toggle="modal" data-bs-target="#botonEditar" style="background-color: #00ff00">
                    AgregarGrupo
                 </button>
                <br>
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
                                <input type="text" class="form-control" name="nombre"  required>
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
               <br>
               <br>
               <br>
               
            @endif
            @endauth
        </div>

    </div>
    </main>
                     

    
      <x-layouts.footer/>



<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Grupo;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;

class RegisternController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // if(Auth::user()->rol == "alumno"){
        //     $usuarios = user::all();
        // return view('VentanaGruposNueva', ['usuarios' => $usuarios]);

        // }
        // else{
            //$grupoPersona = Auth::user()->id_grupo;
            //$consultagrupos = 'SELECT * FROM users WHERE id_grupo  = $grupopersona';
            $usuarios = user::all();
            $grupos = Grupo::all();
            //$usuariosgrupo = DB::select($consultagrupos);
             return view("VentanaGruposNueva",compact("grupos","usuarios"));

        //}

    }

    public function indexGrupo()
    {
        //





    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //Crear grupos mediante el modal

        $grupo = Grupo::create([

            "Name"=>$request->nombre,

        ]);



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Registrar Usuarios

         $request->validate([
                 "nombre" => "required" ,
                 "apellido" =>"required",
                 "email" => "required", "email",
                 "contraseña" => "required" ,
                 "foto" => "required", 'image',
                 "rol" => "required"
                         ]);

        $usuario = User::create([

            "name" => $request->nombre,
            "apellidos" => $request->apellido,
            "email" => $request->email,
            "password" => Hash::make($request->contraseña),
            "imagen" => $request->nombre. '.' . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION),
            "rol" => $request->rol,
            "id_grupo" => random_int(0,10),

        ]);

        $usuario->save();

        Log::alert($request->foto);

        move_uploaded_file($request->foto, './img/userimg/' . $request->nombre . '.' . (pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION)));

        Auth::login($usuario);

        return redirect(route('home'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = user::findOrFail($id);
        return view('user.editar', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Borrar la imgaen anterior
       // $image_path = public_path().'/img/userimg/';
       // unlink($image_path);

        //Hacer el update
        $user = user::findOrFail($id);
        $user->name = $request->input('nombre');
        $user->apellidos = $request->input('apellido');
        $user->email = $request->input('email');
        // $user->imagen = $request->nombre . '.' . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
        $user->save();

        // move_uploaded_file($request->foto, './img/userimg/' . $request->nombre . '.' . (pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION)));

        return redirect(route('areaPersonal'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request) {

        $credentials =  [
            "name" => $request->nombre,
            "password" => $request->contraseña,
        ];
        Log::alert($credentials);

       if(Auth::attempt($credentials)) {


            Log::alert('Gol del Caaadiiiz!');
            $request->session()->regenerate();

            return redirect(route('home'));
        } else {

            return redirect(route('login'));
        }
    }

}

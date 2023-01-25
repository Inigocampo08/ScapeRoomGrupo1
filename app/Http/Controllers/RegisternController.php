<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Validator;

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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        // $request->validate([
        //         "name" => ["required" ],
        //         "apellidos" =>["required"],
        //         "email" => ["required", "email"],
        //         "password" => ["required" ],
        //         "imagen" => ["required"],
        //         "rol" => ["required"]
        //                 ]);

        $usuario = User::create([

            "name" => $request->nombre,
            "apellidos" => $request->apellido,
            "email" => $request->email,
            "password" => Hash::make($request->contraseña),
            "imagen" => $request->nombre. '.' . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION),
            "rol" => $request->rol,

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
        //
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
        //
        $user = user::findOrFail($id);
        $user->name = $request->input('nombre');
        $user->apellidos = $request->input('apellido');
        $user->email = $request->input('email');
        $user->imagen = $request->input('imagen') ;
        $user->save();

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

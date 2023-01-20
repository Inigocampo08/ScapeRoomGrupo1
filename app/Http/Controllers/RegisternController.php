<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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
        //     "name" => ["required" ],
        //     "apellidos" =>["required"],
        //     "email" => ["required", "email"],
        //     "password" => ["required", "confirmed" ],
        //     "imagen" => ["required"],
        //     "rol" => ["required"]
        // ]);

        $usuario = User::create([

            "name" => $request->nombre,
            "apellidos" => $request->apellido,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "imagen" => $request->imagen,
            "rol" => $request->rol,

        ]);

        $usuario->save();

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

        $credentials = [
            "name" => $request->nombre,
            "password" => $request->passwsord,
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

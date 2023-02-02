<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Introducimos los datos de los usuarios mediante el seeder

        $user = new User();
        $user->name = 'Juan';
        $user->apellidos = 'Gonzalez Martin';
        $user->email = 'juangonzalez@gmail.com';
        $user->password = Hash::make('1234');
        $user->imagen = 'avatar.png';
        $user->rol = 'alumno';
        $user->id_grupo = 1;
        $user->remember_token = '...';
        $user->created_at = date('Y-m-d H:m:s');
        $user->updated_at = date('Y-m-d H:m:s');
        $user->save();

        // $user1 = new User();
        // $user1->name = 'Pedro';
        // $user1->apellidos = 'Perez Sanchez';
        // $user1->email = 'peryhuflidtygsfygdofgoreswbhnjuhewghfiewofrewsanchez@gmail.com';
        // $user1->password = Hash::make('1234');
        // $user1->imagen = 'avatar.png';
        // $user1->rol = 'alumno';
        // $user1->remember_token = '...';
        // $user1->created_at = date('Y-m-d H:m:s');
        // $user1->updated_at = date('Y-m-d H:m:s');
        // $user1->save();


    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
        $user->name = 'Alberto';
        $user->apellidos = 'Gonzalez Martin';
        $user->email = 'albertogonzalez@gmail.com';
        $user->password = '1234';
        $user->imagen = 'avatar.png';
        $user->rol = 'alumno';
        $user->remember_token = '...';
        $user->created_at = date('Y-m-d H:m:s');
        $user->updated_at = date('Y-m-d H:m:s');
        $user->save();

        $user1 = new User();
        $user1->name = 'Pedro';
        $user1->apellidos = 'Perez Sanchez';
        $user1->email = 'persanchez@gmail.com';
        $user1->password = '1234';
        $user1->imagen = 'avatar.png';
        $user1->rol = 'alumno';
        $user1->remember_token = '...';
        $user1->created_at = date('Y-m-d H:m:s');
        $user1->updated_at = date('Y-m-d H:m:s');
        $user1->save();
        

    }
}

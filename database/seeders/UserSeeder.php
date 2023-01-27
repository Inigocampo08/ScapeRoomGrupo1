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

        $user->save();
    }
}

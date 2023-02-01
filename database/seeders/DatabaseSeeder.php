<?php

namespace Database\Seeders;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Aqui es donde llamamos al resto de los seeders para que se ejecuten
        //$this->call(UserSeeder::class);

        // usamos las factories para crear registros en masa para la base de datos
        User::factory(10)->create();
    }
}

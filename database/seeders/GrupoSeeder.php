<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grupo;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grupo1 = new Grupo();
        $grupo1->nombre = 'LasFresas';
        $grupo1->created_at = date('Y-m-d H:m:s');
        $grupo1->updated_at = date('Y-m-d H:m:s');
        $grupo1->save();

        $grupo2 = new Grupo();
        $grupo2->nombre = 'LosChavales';
        $grupo2->created_at = date('Y-m-d H:m:s');
        $grupo2->updated_at = date('Y-m-d H:m:s');
        $grupo2->save();

        $grupo3 = new Grupo();
        $grupo3->nombre = 'Willy';
        $grupo3->created_at = date('Y-m-d H:m:s');
        $grupo3->updated_at = date('Y-m-d H:m:s');
        $grupo3->save();
    }
}

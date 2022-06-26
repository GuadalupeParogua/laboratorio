<?php

namespace Database\Seeders;

use App\Models\odontologo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OdontologoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        odontologo::create([
            'id'=>1,
            'id_persona'=>1,
            'id_clinica'=>1,
            'especialidad'=>'Muelas',
            'nombre'=> 'Rous ',
           

        ]);
    }
}

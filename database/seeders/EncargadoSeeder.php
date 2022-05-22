<?php

namespace Database\Seeders;

use App\Models\encargado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EncargadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        encargado::create([
            'id'=>1,
            'id_persona'=>1,
            'usuario'=>'YHOSMAR',
            'password'=>Hash::make('1234')
            
        ]);
    }
}

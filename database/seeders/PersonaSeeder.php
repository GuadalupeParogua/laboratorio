<?php

namespace Database\Seeders;

use App\Models\persona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        persona::create([
            'id'=>1,
            'ci'=>10632314,
            'nombre'=> 'Yhomar Milton',
            'apellido'=> 'Quispe García',
            'telefono'=>74526316,
            'direccion'=>'Av.Beni calle ambaibo N° 2235 zona del segundo anillo.',
            'correo'=> 'yhomarQuispe@gmail.com',
            'tipo'=>'A'
        ]);
    }
}

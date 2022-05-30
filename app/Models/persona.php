<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class persona extends Model
{
    use HasFactory;
    protected $table = 'personas';
//    use SoftDeletes;

    protected $fillable = [
        'ci',
        'nombre',
        'apellido',
        'telefono',
        'direccion',
        'correo',
       // $table->integer('estado');
        'tipo',

    ]; 
    public function encargado()
    {
        return $this->hasOne(encargado::class, 'id_persona', 'id');
    }
    public function odontologo()
    {
        return $this->hasOne(odontologo::class, 'id_persona', 'id');
    }
}

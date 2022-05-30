<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class clinica extends Model
{
    use HasFactory;
    protected $table = 'clinicas';
    //use SoftDeletes;
    protected $fillable =[
        'nombre',
        'direccion',
        'telefono',
    ];
    public function odontologo()
    {
        return $this->hasOne(odontologo::class, 'id_clinica', 'id');
    }
}

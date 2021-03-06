<?php

namespace App\Models;

use App\Models\orden_de_pedido;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\SoftDeletes;

class odontologo extends Model
{
    use HasFactory;
    protected $table = 'odontologos';
//    use SoftDeletes;
    protected $fillable =[
        'id_persona',
        'id_clinica',
        'especialidad',
    ];
    public function persona()
    {
        return $this->belongsTo(persona::class,'id_persona', 'id');
    }
    public function clinica()
    {
        return $this->belongsTo(clinica::class,'id_clinica', 'id');
    }
    /* relacion de orden de pedido con odontologo */
    // uno a muchos
    public function Orden_pedido()
    {
        return $this->hasMany(orden_de_pedido::class, 'id');
    }
}



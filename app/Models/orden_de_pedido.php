<?php

namespace App\Models;

use App\Models\pago;
use App\Models\encargado;

use App\Models\odontologo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class orden_de_pedido extends Model
{
    use HasFactory;


    /* relacion muchos a uno */
    public function Odontologo()
    {
        return $this->belongsTo(odontologo::class, 'id_odontologo');
    }

     /* relacion muchos a uno */
     public function encargado()
     {
         return $this->belongsTo(encargado::class, 'id_encargado');
     }
     // uno a muchos
     public function pago()
     {
         return $this->hasMany(pago::class, 'id');
     }
}

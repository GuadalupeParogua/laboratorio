<?php

namespace App\Models;

use App\Models\orden_de_pedido;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pago extends Model
{
    use HasFactory;

     /* relacion muchos a uno */
     public function orden_de_pedido()
     {
         return $this->belongsTo(orden_de_pedido::class, 'id_ordenpedido');
     }

     /* relacion muchos a uno */
     public function tipoPago()
     {
         return $this->belongsTo(tipo_de_pago::class, 'id_tipo');
     }
}

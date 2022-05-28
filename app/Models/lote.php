<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lote extends Model
{
    use HasFactory;

    /* relacion muchos a uno */
    public function Materia_Prima()
    {
        return $this->belongsTo(materia_prima::class, 'id_materiaprima');
    }
}

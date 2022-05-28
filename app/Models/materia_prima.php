<?php

namespace App\Models;

use App\Models\lote;
use App\Models\categoria;
use App\Models\unidad_de_medida;
use App\Models\area_almacenamiento;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class materia_prima extends Model
{
    use HasFactory;

    /* relacion uno a mucho */
    public function UniMedida()
    {
        return $this->belongsTo(unidad_de_medida::class, 'id_unidadMedida');
    }
    /* relacion uno a mucho */
    public function categoria()
    {
        return $this->belongsTo(categoria::class, 'id_categoria');
    }
    /* relacion uno a mucho */
    public function AreAlmacen()
    {
        return $this->belongsTo(area_almacenamiento::class, 'id_area');
    }

    /* relacion de materia prima con lote */
    // uno a muchos
    public function lote()
    {
        return $this->hasMany(lote::class, 'id');
    }
}

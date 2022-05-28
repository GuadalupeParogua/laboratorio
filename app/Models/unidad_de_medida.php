<?php

namespace App\Models;

use App\Models\materia_prima;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class unidad_de_medida extends Model
{
    use HasFactory;

    /* uno a mucho  */
    protected $table = 'unidad_de_medidas';

    protected $fillable = [
        'id',
        'nombre',
        'abreviatura',

    ];
    /* uno a muchos */

    public function MateriaPrima(){
        return $this->hasMany(materia_prima::class,'id')->orderBy('nombre', 'asc');
    }




}

<?php

namespace App\Models;

use App\Models\materia_prima;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class area_almacenamiento extends Model
{
    use HasFactory;

     /* uno a muchos */

     public function Materia_Prima(){
        return $this->hasMany(materia_prima::class,'id')->orderBy('nombre', 'asc');
    }
}

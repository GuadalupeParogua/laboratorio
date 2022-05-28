<?php

namespace App\Models;

use App\Models\materia_prima;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class categoria extends Model
{
    use HasFactory;
    protected $table = 'categorias';

    protected $fillable = [
        'id',
        'nombre',

    ];
       /* uno a mucho en libros */
       public function MateriaPri(){
        return $this->hasMany(materia_prima::class,'id')->orderBy('nombre', 'asc');
    }
}

<?php

namespace App\Models;

use App\Models\pago;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tipo_de_pago extends Model
{
    use HasFactory;
    protected $table = 'tipo_de_pagos';
    protected $fillable = [
        'id',
        'tipo',

    ];
    // uno a muchos
    public function pago()
    {
        return $this->hasMany(pago::class, 'id');
    }
}

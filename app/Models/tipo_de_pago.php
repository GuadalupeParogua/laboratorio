<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_de_pago extends Model
{
    use HasFactory;
    protected $table = 'tipo_de_pagos';
    protected $fillable = [
        'id',
        'tipo',

    ];
}

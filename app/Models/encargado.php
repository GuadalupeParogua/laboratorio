<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//use Illuminate\Database\Eloquent\SoftDeletes;

class encargado extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'encargados';
//    use SoftDeletes;

    protected $fillable = [
        'id_persona',
        'usuario',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    public function persona()
    {
        return $this->belongsTo(persona::class,'id_persona', 'id');
    }

}

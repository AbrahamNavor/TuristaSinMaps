<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registros extends Model
{
    protected $table = 'registros';

    protected $fillable = [
        'nombre', 
        'apellido',
        'email',
        'telefono',
        'contraseña',
        'verification_token', 
        'email_verified_at'
    ];

    protected $hidden = [
        'contraseña',
        'verification_token',
    ];
}


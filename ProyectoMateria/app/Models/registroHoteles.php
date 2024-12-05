<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class registroHoteles extends Model
{
    protected $table = 'registro_hoteles';
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email',
        'fecha_entrada',
        'fecha_salida',
        'personas',
        'habitaciones',
        'precio',
    ];
}

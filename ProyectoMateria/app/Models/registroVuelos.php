<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class registroVuelos extends Model
{
    use HasFactory;

    protected $table = 'registro_vuelos'; // Nombre de la tabla en la base de datos
    protected $fillable = [
        'numero_vuelo',
        'origen',
        'destino',
        'fecha_salida',
        'fecha_llegada',
        'precio',
    ];
}

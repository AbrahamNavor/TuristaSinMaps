<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reservacion extends Model
{
    protected $table = 'registro_vuelos';
    protected $primaryKey = 'id';
    protected $fillable = ['id','nombre','apellido','email','telefono', 'fecha', 'hora', 'personas', 'vuelo', 'hoetl'];
    public $timestamps = true;
}

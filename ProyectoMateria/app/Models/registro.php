<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    use HasFactory;

    protected $table = 'registros';

    public $timestamps = true;

    protected $primaryKey = 'id'; // Cambia 'id' por el nombre de tu clave primaria.
}

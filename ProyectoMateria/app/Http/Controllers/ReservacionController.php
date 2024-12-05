<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservacion;

class ReservacionController extends Controller
{
    public function index()
    {
        $vuelos = Reservacion::all(); // Obtener todos los vuelos
        return view('reservacion', compact('vuelos'));
    }
}

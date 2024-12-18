<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Controlador extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }
    public function vuelos()
    {
        return view('vuelos');
    }
    public function registro()
    {
        return view('registro');
    }
    public function hoteles()
    {
        return view('hoteles');
    }
    public function CRUDusuarios()
    {
        return view('CRUDusuarios');
    }
    public function inicio_sesion()
    {
        return view('sesion');
    }
    public function opciones()
    {
        return view('opciones');
    }
    public function vermas()
    {
        return view('vermas');
    }
    public function vermashotel()
    {
        return view('vermashotel');
    }
    public function home()
    {
        return view('home');
    }
    public function CRUDvuelos()
    {
        return view('CRUDvuelos');
    }
    public function CRUDhoteles()
    {
        return view('CRUDhoteles');
    }   

    public function sesion()
    {
        return view('sesion');
    }

    public function cerrarSesion()
    {
        return view('inicio');
    }
    public function registroUsuario()
    {
        return view('registroUsuario');
    }
    public function registroVuelo()
    {
        return view('registroVuelo');
    }
    public function registroHotel()
    {
        return view('registroHotel');
    }
    public function homeAdmin()
    {
        return view('homeAdmin');
    }
    
    public function reservacion()
    {
        return view('reservacion');
    }
}

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
    public function gestion_usuario()
    {
        return view('gestion_usuario');
    }
    public function inicio_sesion()
    {
        return view('sesion');
    }
    public function gestion_admin()
    {
        return view('gestion_admin');
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
    public function reservacion()
    {
        return view('reservacion');
    }
    public function home()
    {
        return view('home');
    }
    public function componente()
    {
        return view('componente');
    }

    public function sesion()
    {
        return view('sesion');
    }

    public function cerrarSesion()
    {
        // Add your logout logic here
        return redirect()->route('rutainicio');
    }
}
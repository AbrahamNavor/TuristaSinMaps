<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function g_usuarios()
    {
        return view('gestion_usuario');
    }
    public function inicio_sesion()
    {
        return view('sesion');
    }
    public function g_admin()
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

    public function procesarSesion(Request $request)
    {
        $usuarios = [
            'admin@gmail.com' => ['password' => 'admin', 'name' => 'Admin', 'role' => 'admin'],
            'usuario@gmail.com' => ['password' => 'usuario', 'name' => 'Navor', 'role' => 'user']
        ];

        $usuario = $request->input('email');
        $contrasena = $request->input('contrasena');

        if (isset($usuarios[$usuario]) && $usuarios[$usuario]['password'] == $contrasena) {
            session(['usuario' => $usuarios[$usuario]]);
            return view('opciones');
        } else {
            return view('sesion');
        }
    }

    public function cerrarSesion(){
        session()->forget('usuario');
        return redirect()->route('rutasesion');
    }
}

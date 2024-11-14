<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorRegistros extends Controller
{
    public function procesarRegistro(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'telefono' => 'required|string|max:15',
        'fecha_reservacion' => 'required|date',
        'hora_reservacion' => 'required|date_format:H:i',
        'numero_personas' => 'required|integer|min:1',
        'numero_vuelo' => 'required|string|max:50',
        'hotel' => 'required|string|max:255',
    ]);

    $usuario = $request->input('nombre');
    session()->flash('exito', 'El usuario ' . $usuario . ' fue registrado exitosamente.');

    return redirect()->route('rutahome');
}


    public function procesarSesion(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'contrasena' => 'required|string',
        ]);

        $usuarios = [
            'admin@gmail.com' => ['password' => 'admin', 'role' => 'admin'],
            'usuario@gmail.com' => ['password' => 'usuario', 'role' => 'user']
        ];

        $email = $request->input('email');
        $contrasena = $request->input('contrasena');

        if (isset($usuarios[$email]) && $usuarios[$email]['password'] === $contrasena) {
            session(['usuario' => $usuarios[$email]]);
            return redirect()->route('opciones')->with('exito', '¡Inicio de sesión exitoso!');
        } else {
            return redirect()->route('rutasesion')->withErrors(['email' => 'Credenciales incorrectas.']);
        }
    }
}

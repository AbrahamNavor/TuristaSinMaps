<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorRegistros extends Controller
{
    public function procesarRegistro(Request $peticion){
        //return redirect('/');

        $peticion->validate([
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'email' => 'required|email',
            'telefono' => 'required|numeric|digits_between:10,15',
            'fecha_reservacion' => 'required|date|after_or_equal:today', // Asegura que la fecha sea hoy o en el futuro
            'hora_reservacion' => 'required|date_format:H:i',
            'numero_personas' => 'required|integer|min:1|max:20',
            'numero_vuelo' => 'required|string|max:10',
            'hotel' => 'required|string|max:100',
        ]);
        

        $usuario = $peticion->input('nombre');
        session()->flash('exito', 'El usuario de '.$usuario.' fue registrado exitosamente!.');

        return to_route('rutaregistro');
    }

    public function procesarSesion(Request $sesionerror){
        $sesionerror->validate([
            'email' => 'required|email',
            'contrasena' => 'required|string',
        ]);

        $email = $sesionerror->input('email');
        session()->flash('error', 'El usuario de '.$email.' no fue encontrado!.');
        return redirect()->route('rutasesion')->withErrors(['email' => 'El usuario no fue encontrado.']);
    }
}

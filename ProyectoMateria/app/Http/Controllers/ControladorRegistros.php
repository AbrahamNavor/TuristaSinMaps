<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorReservacion;
use Illuminate\Http\Request;
use App\Http\Requests\validadorUsuario;

class ControladorRegistros extends Controller
{
    public function procesarRegistroHotel(Request $request)
    {
        $request->validate([
            'txtnombre' => 'required|string|max:255',
            'txtdireccion' => 'required|string|max:255',
            'txttelefono' => 'required|string|max:15',
            'txthabitaciones' => 'required|integer|min:1',
            'txtcategoria' => 'required|string|in:1 estrella,2 estrellas,3 estrellas,4 estrellas,5 estrellas',
            'txtservicios' => 'required|string|max:255',
        ]);

        session()->flash('exito', 'Hotel registrado exitosamente.');

        return to_route('rutahome');
    }
    public function procesarRegistroVuelo(Request $request)
    {
        $request->validate([
            'txtorigen' => 'required|string|max:255',
            'txtdestino' => 'required|string|max:255',
            'txtfecha_salida' => 'required|date',
            'txtfecha_regreso' => 'required|date|after_or_equal:txtfecha_salida',
            'txtasientos' => 'required|integer|min:1',
            'txtclase' => 'required|string|in:economica,ejecutiva,primera', 
            'txtaerolinea' => 'required|string|max:255',
            'txtvuelo' => 'required|string|max:50',
            'txthorario_salida' => 'required|date_format:H:i',
            'txthorario_llegada' => 'required|date_format:H:i|after:txthorario_salida', 
        ]);        

        session()->flash('exito', 'Vuelo registrado exitosamente.');

        return to_route('opciones');
    }

    public function procesarRegistroUsuario(validadorUsuario $peticion)
    {
        $peticion->validate([
            'txtnombre' => 'required|string|max:255',
            'txtapellido' => 'required|string|max:255',
            'txtemail' => 'required|email|max:255',
            'txttelefono' => 'required|string|max:15',
            'txtpassword' => 'required|string',
            'txtconfirmacion' => 'required|same:txtpassword',
        ]);

        $usuario = $peticion->input('txtnombre');
        session()->flash('exito', 'El usuario ' . $usuario . ' fue registrado exitosamente.');

        return to_route('rutahome');
    }

    public function procesarRegistro(validadorReservacion $peticion)
    {
        $peticion->validate([
            'txtnombre' => 'required|string|max:255',
            'txtapellido' => 'required|string|max:255',
            'txtemail' => 'required|email|max:255',
            'txttelefono' => 'required|string|max:15',
            'txtreservacion' => 'required|date',
            'txthora' => 'required|date_format:H:i',
            'txtpersonas' => 'required|integer|min:1',
            'txtvuelo' => 'required|string|max:50',
            'txthotel' => 'required|string|max:255',
        ]);

        session()->flash('exito', 'Reservación realizada exitosamente.');

        return to_route('opciones');
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

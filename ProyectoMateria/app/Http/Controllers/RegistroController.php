<?php

namespace App\Http\Controllers;

use App\Models\registro;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Str;
use App\Mail\VerifyEmail;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class RegistroController extends Controller
{

    public function home()
    {
        return view('inicio');
    }

    public function index()
    {
        $consulta = registro::all();
        return view('CRUDusuarios', compact('consulta'));
    }

    public function sesion()
    {
        return view('layouts.sesion');
    }

    public function create()
    {
        return view('registroUsuario');
    }

    public function store(Request $request)
    {
        $request->validate([
            'txtnombre' => 'required|string|max:255',
            'txtapellido' => 'required|string|max:255',
            'txtemail' => 'required|email|max:255',
            'txttelefono' => 'required|string|max:15',
            'txtpassword' => 'required|string|min:6',
            'txtconfirmacion' => 'required|same:txtpassword',
        ]);

        // Guardar el nuevo usuario en la base de datos
        $addregistro = new registro();
        $addregistro->nombre = $request->input('txtnombre');
        $addregistro->apellido = $request->input('txtapellido');
        $addregistro->email = $request->input('txtemail');
        $addregistro->telefono = $request->input('txttelefono');
        $addregistro->contraseña = $request->input('txtpassword');
        $addregistro->verification_token = Str::random(60);
        $addregistro->save();


        Mail::to($addregistro->email)->send(new VerifyEmail($addregistro));

        return redirect()->route('rutasesion')->with('exito', 'Registro exitoso. Por favor verifica tu correo.');

         // Determinar la redirección según el rol
        $userRole = session('usuario.role', 'user'); // Obtén el rol del usuario autenticado o usa "user" por defecto.

        if ($userRole === 'admin') {
            return redirect()->route('rutaCRUDusuarios');
        } else {
            return redirect()->route('opciones');
        } 
    }

    public function procesarRegistro(Request $request)
    {
        $registro = new registro();
        $registro->nombre = $request->input('nombre');
        $registro->email = $request->input('email');
        $registro->contraseña = $request->input('contraseña');
        $registro->verification_token = Str::random(60);
        $registro->save();

        // Enviar correo de confirmación
        Mail::to($registro->email)->send(new VerifyEmail($registro));

        return redirect()->route('rutasesion')->with('exito', 'Registro exitoso. Por favor verifica tu correo.');
    }

    public function verifyEmail($token)
    {
        $registro = registro::where('verification_token', $token)->first();

        if (!$registro) {
            return redirect()->route('rutainicio')->with('error', 'Token de verificación inválido.');
        }

        $registro->email_verified_at = now();
        $registro->verification_token = null;
        $registro->save();

        return redirect()->route('rutasesion')->with('exito', 'Correo verificado correctamente. Ahora puedes iniciar sesión.');
    }


    public function show(registro $registro)
    {
        //
    }

    public function edit(registro $registro) {}

    public function update(Request $request, $id)
    {
        $upCliente = registro::find($id);
        $upCliente->nombre = $request->input('txtnombre');
        $upCliente->apellido = $request->input('txtapellido');
        $upCliente->email = $request->input('txtemail');
        $upCliente->telefono = $request->input('txttelefono');
        $upCliente->contraseña = $request->input('txtpassword');
        $upCliente->save();

        $usuario = $request->input('txtnombre');
        session()->flash('exito', 'El usuario ' . $usuario . ' fue actualizado exitosamente.');
        return to_route('rutaCRUDusuarios');
    }

    public function destroy(Request $request, $id)
    {
        $delCliente = registro::find($id);
        $delCliente->delete();

        $usuario = $request->input('txtnombre');
        session()->flash('exito', 'El usuario ' . $usuario . ' fue eliminado exitosamente.');
        return to_route('rutaCRUDusuarios');
    }

    public function procesarSesion(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'contrasena' => 'required|string',
        ]);
    
        // Recupera el usuario de la base de datos
        $usuario = registro::where('email', $request->input('email'))->first();
    
        // Verifica si el usuario existe
        if ($usuario) {
            // Verifica si es administrador (no necesita verificación de correo)
            if ($usuario->role === 'admin' && $usuario->contraseña === $request->input('contrasena')) {
                // Autenticación exitosa para administrador
                session(['usuario' => $usuario]);
                return redirect()->route('rutahomeAdmin')->with('exito', '¡Inicio de sesión exitoso como administrador!');
            }
    
            // Para usuarios comunes, valida contraseña y verificación de correo
            if ($usuario->email_verified_at && $usuario->contraseña === $request->input('contrasena')) {
                // Autenticación exitosa para usuario
                session(['usuario' => $usuario]);
                return redirect()->route('rutahome')->with('exito', '¡Inicio de sesión exitoso!');
            }
    
            // Si la validación falla
            return redirect()->back()->withErrors(['contrasena' => 'Correo no verificado o contraseña incorrecta.']);
        }
    
        // Si el usuario no existe
        return redirect()->back()->withErrors(['email' => 'Correo electrónico no registrado.']);
    }
}

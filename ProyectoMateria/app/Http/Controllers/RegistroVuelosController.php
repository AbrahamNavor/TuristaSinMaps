<?php

namespace App\Http\Controllers;

use App\Models\registroVuelos;
use Illuminate\Http\Request;

class RegistroVuelosController extends Controller
{
    public function index()
    {
        $consulta = registroVuelos::all();
        return view('CRUDvuelos', compact('consulta'));
    }

    public function create()
    {
        return view('registroVuelo');
    }

    public function store(Request $request)
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
            'txtprecio' => 'required|numeric|min:0',
        ]);

        $addvuelo = new registroVuelos();
        $addvuelo->origen = $request->input('txtorigen');
        $addvuelo->destino = $request->input('txtdestino');
        $addvuelo->fecha_salida = $request->input('txtfecha_salida');
        $addvuelo->fecha_regreso = $request->input('txtfecha_regreso');
        $addvuelo->asientos = $request->input('txtasientos');
        $addvuelo->clase = $request->input('txtclase');
        $addvuelo->aerolinea = $request->input('txtaerolinea');
        $addvuelo->vuelo = $request->input('txtvuelo');
        $addvuelo->horario_salida = $request->input('txthorario_salida');
        $addvuelo->horario_llegada = $request->input('txthorario_llegada');
        $addvuelo->precio = $request->input('txtprecio');
        $addvuelo->save();

        session()->flash('exito', 'Vuelo registrado exitosamente.');
        return redirect()->route('rutaCRUDvuelos');
    }

    public function show(registroVuelos $registroVuelos)
    {
        //
    }

    public function edit(registroVuelos $registroVuelos)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $upVuelo = registroVuelos::find($id);
        $upVuelo->origen = $request->input('txtorigen');
        $upVuelo->destino = $request->input('txtdestino');
        $upVuelo->fecha_salida = $request->input('txtfecha_salida');
        $upVuelo->fecha_regreso = $request->input('txtfecha_regreso');
        $upVuelo->asientos = $request->input('txtasientos');
        $upVuelo->clase = $request->input('txtclase');
        $upVuelo->aerolinea = $request->input('txtaerolinea');
        $upVuelo->vuelo = $request->input('txtvuelo');
        $upVuelo->horario_salida = $request->input('txthorario_salida');
        $upVuelo->horario_llegada = $request->input('txthorario_llegada');
        $upVuelo->precio = $request->input('txtprecio');
        $upVuelo->save();

        session()->flash('exito', 'Vuelo actualizado exitosamente.');
        return redirect()->route('rutaCRUDvuelos');
    }

    public function destroy(Request $id)
    {
        $delVuelo = registroVuelos::find($id);
        $delVuelo->delete();

        session()->flash('exito', 'Vuelo eliminado exitosamente.');
        return redirect()->route('rutaCRUDvuelos');
    }

    public function buscar(Request $request)
    {
        // Obtén los valores del formulario
        $origen = $request->input('txtorigen');
        $destino = $request->input('txtdestino');
        $fecha_salida = $request->input('txtfecha_salida');
        $fecha_regreso = $request->input('txtfecha_regreso');
        $asientos_disponibles = $request->input('txtasientos');
    
        // Construye la consulta dinámica
        $query = registroVuelos::query();
    
        if (!empty($origen)) {
            $query->where('origen', 'LIKE', '%' . $origen . '%');
        }
    
        if (!empty($destino)) {
            $query->where('destino', 'LIKE', '%' . $destino . '%');
        }
    
        if (!empty($fecha_salida)) {
            $query->whereDate('fecha_salida', '=', $fecha_salida);
        }
    
        if (!empty($fecha_regreso)) {
            $query->whereDate('fecha_regreso', '=', $fecha_regreso);
        }
    
        if (!empty($asientos_disponibles)) {
            $query->where('asientos', '>=', $asientos_disponibles);
        }
    
        // Ejecuta la consulta y devuelve los resultados
        $vuelos = $query->get();
    
        return view('vuelos', compact('vuelos'));
    }    
    
    public function mostrarVuelos()
    {
        $vuelos = RegistroVuelos::all(); // Obtiene todos los vuelos
        return view('vuelos', compact('vuelos')); // Retorna la vista con los datos
    }
    
    public function verMas($id)
    {
        // Busca el vuelo por su ID
        $vuelo = RegistroVuelos::find($id);
    
        // Verifica si el vuelo existe
        if (!$vuelo) {
            return redirect()->route('rutavuelos')->with('error', 'Vuelo no encontrado');
        }
    
        // Retorna la vista con la variable $vuelo
        return view('vermas', compact('vuelo'));
    }
    


}

<?php

namespace App\Http\Controllers;

use App\Models\registroHoteles;
use Illuminate\Http\Request;

class RegistroHotelesController extends Controller
{
    public function index()
    {
        $consulta = registroHoteles::all();
        return view('CRUDhoteles', compact('consulta'));
    }

    public function create()
    {
        return view('registroHotel');
    }

    public function store(Request $request)
    {
        $request->validate([
            'txtnombre' => 'required|string|max:255',
            'txtdireccion' => 'required|string|max:255',
            'txttelefono' => 'required|string|max:15',
            'txthabitaciones' => 'required|integer|min:1',
            'txtcategoria' => 'required|string|in:1 estrella,2 estrellas,3 estrellas,4 estrellas,5 estrellas',
            'txtservicios' => 'required|string|max:255',
            'txtprecio' => 'required|numeric|min:0.00',
            'txtdescripcion' => 'required|string|max:255',
            'txtpoliticas' => 'required|string|max:255',
        ]);

        $addhotel = new registroHoteles();
        $addhotel->nombre = $request->input('txtnombre');
        $addhotel->direccion = $request->input('txtdireccion');
        $addhotel->telefono = $request->input('txttelefono');
        $addhotel->habitaciones = $request->input('txthabitaciones');
        $addhotel->categoria = $request->input('txtcategoria');
        $addhotel->servicios = $request->input('txtservicios');
        $addhotel->precio = $request->input('txtprecio');
        $addhotel->descripcion = $request->input('txtdescripcion');
        $addhotel->politicas = $request->input('txtpoliticas');
        $addhotel->save();

        session()->flash('exito', 'Hotel registrado exitosamente.');
        return redirect()->route('rutaCRUDhoteles');
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update(Request $request, $id)
    {
        $upHotel = registroHoteles::find($id);
        $upHotel->nombre = $request->input('txtnombre');
        $upHotel->direccion = $request->input('txtdireccion');
        $upHotel->telefono = $request->input('txttelefono');
        $upHotel->habitaciones = $request->input('txthabitaciones');
        $upHotel->categoria = $request->input('txtcategoria');
        $upHotel->servicios = $request->input('txtservicios');
        $upHotel->precio = $request->input('txtprecio');
        $upHotel->descripcion = $request->input('txtdescripcion');
        $upHotel->politicas = $request->input('txtpoliticas');
        $upHotel->save();

        session()->flash('exito', 'Hotel actualizado exitosamente.');
        return redirect()->route('rutaCRUDhoteles');
    }

    public function destroy(Request $id)
    {
        $delHotel = registroHoteles::find($id);
        $delHotel->delete();

        session()->flash('exito', 'Hotel eliminado exitosamente.');
        return redirect()->route('rutaCRUDhoteles');
    }
    public function mostrarHoteles()
    {
        $hoteles = registroHoteles::all(); // Obtiene todos los vuelos
        return view('hoteles', compact('hoteles')); // Retorna la vista con los datos
    }

    public function buscar(Request $request)
    {
        $nombre = $request->input('txtnombre');
        $direccion = $request->input('txtdireccion');
        $habitaciones = $request->input('txthabitaciones');
        $categoria = $request->input('txtcategoria');
        $precio = $request->input('txtprecio');
        $query = registroHoteles::query();

        if (!empty($nombre)) {
            $query->where('nombre', 'LIKE',  '%' . $nombre . '%');
        }

        if (!empty($direccion)) {
            $query->where('direccion', 'LIKE',  '%' . $direccion . '%');
        }

        if (!empty($habitaciones)) {
            $query->where('habitaciones', '>=', $habitaciones); // Busca mínimo este número de habitaciones
        }
        
        if (!empty($categoria)) {
            $query->where('categoria', $categoria); // Comparación directa si las categorías son únicas
        }

        if (!empty($precio)) {
            $query->where('precio', '<=', $precio); // Busca precios menores o iguales
        }

        $hoteles = $query->get();

        return view('hoteles', compact('hoteles'));
    }


    public function verHotel($id)
    {
        // Busca el hotel por su ID
        $hotel = registroHoteles::find($id);

        // Verifica si el hotel existe
        if (!$hotel) {
            return redirect()->route('rutahoteles')->withErrors(['error' => 'Hotel no encontrado.']);
        }

        // Retorna la vista con los detalles del hotel
        return view('vermashotel', compact('hotel'));
    }
}

@extends('layouts.nav')

@section('titulo', 'Reservacion')

@section('nav')

<div class="container mt-5">
    <div class="box">
        <div class="alert alert-info mt-3">
            <strong>Nota:</strong> No se puede cancelar una reservación con menos de 72 horas de anticipación.
        </div>
        <div class="box-header">
            <h2>Historial de Reservaciones</h2>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th># de Vuelo</th>
                            <th>Asientos</th>
                            <th>Nombre del Hotel</th>
                            <th>Fecha de Entrada</th>
                            <th>Fecha de Salida</th>
                            <th>Precio Total</th>
                            <th>Hora de Compra</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2023-10-01</td>
                            <td>10:00</td>
                            <td>AB123</td>
                            <td>12A, 12B</td>
                            <td>Hotel California</td>
                            <td>2023-10-01</td>
                            <td>2023-10-05</td>
                            <td>$500</td>
                            <td>09:00</td>
                            <td>
                                <form method="GET">
                                    <button type="submit" class="btn btn-danger btn-sm">Cancelar</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2023-10-02</td>
                            <td>11:00</td>
                            <td>CD456</td>
                            <td>14C, 14D</td>
                            <td>Grand Hotel</td>
                            <td>2023-10-02</td>
                            <td>2023-10-06</td>
                            <td>$600</td>
                            <td>10:00</td>
                            <td>
                                <form method="GET">
                                    <button type="submit" class="btn btn-danger btn-sm">Cancelar</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>2023-10-03</td>
                            <td>12:00</td>
                            <td>EF789</td>
                            <td>16E, 16F</td>
                            <td>Sunset Resort</td>
                            <td>2023-10-03</td>
                            <td>2023-10-07</td>
                            <td>$700</td>
                            <td>11:00</td>
                            <td>
                                <form method="GET">
                                    <button type="submit" class="btn btn-danger btn-sm">Cancelar</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="text-center mt-4">
    <a href="{{ route('rutahome') }}" class="btn btn-secondary">Regresar al Home</a>
    <a href="{{ route('rutaregistro') }}" class="btn btn-primary">Realizar una Reservacion</a>
</div>

@endsection
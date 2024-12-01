<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;
use App\Http\Controllers\ControladorRegistros;

Route::get('/', [Controlador::class, 'inicio'])->name('rutainicio');
Route::get('/vuelos', [Controlador::class, 'vuelos'])->name('rutavuelos');
Route::get('/registro', [Controlador::class, 'registro'])->name('rutaregistro');
Route::get('/hoteles', [Controlador::class, 'hoteles'])->name('rutahoteles');
Route::get('/g_usuarios', [Controlador::class, 'gestion_usuario'])->name('rutag_usuarios');
Route::get('/inicio_sesion', [Controlador::class, 'inicio_sesion'])->name('rutasesion');
Route::get('/g_admin', [Controlador::class, 'gestion_admin'])->name('rutag_admin');
Route::get('/opciones', [Controlador::class, 'opciones'])->name('opciones');
Route::get('/vermas', [Controlador::class, 'vermas'])->name('rutavermas');
Route::get('/vermashotel', [Controlador::class, 'vermashotel'])->name('rutavermashotel');
Route::get('/reservacion', [Controlador::class, 'reservacion'])->name('rutareservacion');
Route::get('/home', [Controlador::class, 'home'])->name('rutahome');
Route::get('/sesion', [Controlador::class, 'sesion'])->name('rutasesion');
Route::get('/registroUsuario', [Controlador::class, 'registroUsuario'])->name('rutaregistro_usuario');
Route::get('/registroVuelo', [Controlador::class, 'registroVuelo'])->name('rutaregistroVuelo');
Route::get('/registroHotel', [Controlador::class, 'registroHotel'])->name('rutaregistroHotel');


Route::get('/componente', [Controlador::class, 'componente'])->name('rutacomponente');

Route::post('/procesarSesion', [ControladorRegistros::class, 'procesarSesion'])->name('procesarSesion');
Route::post('/procesarRegistro', [ControladorRegistros::class, 'procesarRegistro'])->name('procesarRegistro');
Route::post('/procesarRegistroUsuario', [ControladorRegistros::class, 'procesarRegistroUsuario'])->name('procesarRegistroUsuario');
route::post('/procesarRegistroVuelo', [ControladorRegistros::class, 'procesarRegistroVuelo'])->name('procesarRegistroVuelo');
route::post('/procesarRegistroHotel', [ControladorRegistros::class, 'procesarRegistroHotel'])->name('procesarRegistroHotel');
Route::get('/cerrar-sesion', [Controlador::class, 'cerrarSesion'])->name('cerrarSesion');




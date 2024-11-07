<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;
use App\Http\Controllers\ControladorRegistros;

Route::get('/', [Controlador::class, 'inicio'])->name('rutainicio');
Route::get('/vuelos', [Controlador::class, 'vuelos'])->name('rutavuelos');
Route::get('/registro', [Controlador::class, 'registro'])->name('rutaregistro');
Route::get('/hoteles', [Controlador::class, 'hoteles'])->name('rutahoteles');
Route::get('/g_usuarios', [Controlador::class, 'gesion_usuario'])->name('rutag_usuarios');
Route::get('/inicio_sesion', [Controlador::class, 'inicio_sesion'])->name('rutasesion');
Route::get('/g_admin', [Controlador::class, 'gestion_admin'])->name('rutag_admin');
Route::get('/opciones', [Controlador::class, 'opciones'])->name('rutaopciones');
Route::get('/vermas', [Controlador::class, 'vermas'])->name('rutavermas');
Route::get('/vermashotel', [Controlador::class, 'vermashotel'])->name('rutavermashotel');
Route::get('/reservacion', [Controlador::class, 'reservacion'])->name('rutareservacion');
Route::get('/home', [Controlador::class, 'home'])->name('rutahome');
Route::get('/sesion', [Controlador::class, 'sesion'])->name('rutasesion');


Route::get('/componente', [Controlador::class, 'componente'])->name('rutacomponente');

Route::post('/procesarSesion', [Controlador::class, 'procesarSesion'])->name('rutaprocesarSesion');
Route::post('/registro', [ControladorRegistros::class, 'procesarRegistro'])->name('rutaprocesarRegistro');
Route::get('/cerrar-sesion', [Controlador::class, 'cerrarSesion'])->name('cerrarSesion');


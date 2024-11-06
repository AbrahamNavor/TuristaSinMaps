<?php

use Illuminate\Support\Facades\Route;

Route::view('/','inicio')->name('rutainicio');
Route::view('/vuelos','vuelos')->name('rutavuelos');
Route::view('/registro','registro')->name('rutaregistro');
Route::view('/hoteles','hoteles')->name('rutahoteles');
Route::view('/g_usuarios','gestion_usuarios')->name('rutag_usuarios');
Route::view('/inicio_sesion','sesion')->name('rutasesion');
Route::view('/g_admin','gestion_admin')->name('rutag_admin');

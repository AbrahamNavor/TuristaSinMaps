<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\Controlador;
use App\Http\Controllers\ControladorRegistros;
use App\Http\Controllers\RegistroVuelosController;
use App\Http\Controllers\RegistroHotelesController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

// Rutas de autenticación
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {return view('home');})->name('home');
});

// Rutas para recuperación de contraseñas
Route::prefix('password')->name('password.')->group(function () {
    // Ruta para mostrar el formulario de recuperación
    Route::get('request', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('request');
    
    // Ruta para enviar el correo con el enlace de restablecimiento
    Route::post('email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('email');
    
    // Ruta para mostrar el formulario para restablecer la contraseña
    Route::get('reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('reset');
    
    // Ruta para procesar el restablecimiento de la contraseña
    Route::post('reset', 'Auth\ResetPasswordController@reset')->name('update');
});

// Página principal
Route::get('/', [RegistroController::class, 'index'])->name('index');
Route::get('/inicio', [RegistroController::class, 'home'])->name('rutainicio');

// Rutas del controlador principal (Controlador)
Route::get('/vuelos', [Controlador::class, 'vuelos'])->name('rutavuelos');
Route::get('/registro', [Controlador::class, 'registro'])->name('rutaregistro');
Route::get('/hoteles', [Controlador::class, 'hoteles'])->name('rutahoteles');
/* Route::get('/gestion_usuarios', [Controlador::class, 'gestion_usuarios'])->name('rutagestion_usuario');
 */Route::get('/inicio_sesion', [Controlador::class, 'inicio_sesion'])->name('rutasesion');
Route::get('/opciones', [Controlador::class, 'opciones'])->name('opciones');
Route::get('/vermas', [Controlador::class, 'vermas'])->name('rutavermas');
Route::get('/vermashotel', [Controlador::class, 'vermashotel'])->name('rutavermashotel');
Route::get('/reservacion', [Controlador::class, 'reservacion'])->name('rutareservacion');
Route::get('/home', [Controlador::class, 'home'])->name('rutahome');
Route::get('/homeAdmin', [Controlador::class, 'homeAdmin'])->name('rutahomeAdmin');
/* Route::get('/CRUDvuelos', [Controlador::class, 'CRUDvuelos'])->name('rutaCRUDvuelos');
/*Route::get('/CRUDhoteles', [Controlador::class, 'CRUDhoteles'])->name('rutaCRUDhoteles');
*/Route::get('/cerrar-sesion', [Controlador::class, 'cerrarSesion'])->name('cerrarSesion');

// Rutas del controlador de registros (ControladorRegistros)
/* Route::post('/procesarSesion', [ControladorRegistros::class, 'procesarSesion'])->name('procesarSesion');
 *//* Route::post('/procesarRegistro', [ControladorRegistros::class, 'procesarRegistro'])->name('procesarRegistro');
Route::post('/procesarRegistroUsuario', [ControladorRegistros::class, 'procesarRegistroUsuario'])->name('procesarRegistroUsuario');
Route::post('/procesarRegistroVuelo', [ControladorRegistros::class, 'procesarRegistroVuelo'])->name('procesarRegistroVuelo');
Route::post('/procesarRegistroHotel', [ControladorRegistros::class, 'procesarRegistroHotel'])->name('procesarRegistroHotel');
 */
// Rutas del controlador de registro (RegistroController)
Route::resource('registro', RegistroController::class);
Route::get('/registroUsuario', [RegistroController::class, 'create'])->name('rutaregistro_usuario');
Route::get('/CRUDusuarios', [RegistroController::class, 'index'])->name('rutaCRUDusuarios');
Route::post('/procesarSession', [RegistroController::class, 'procesarSesion'])->name('procesarSesion');

// Rutas del controlador de vuelos (RegistroVuelosController)
Route::resource('registroVuelos', RegistroVuelosController::class);
Route::get('/registroVuelos', [RegistroVuelosController::class, 'create'])->name('rutaregistro_vuelos');
Route::get('/CRUDvuelos', [RegistroVuelosController::class, 'index'])->name('rutaCRUDvuelos');
Route::get('/vuelos', [RegistroVuelosController::class, 'buscar'])->name('rutavuelos');
Route::get('/vuelos', [RegistroVuelosController::class, 'mostrarVuelos'])->name('rutavuelos');
Route::get('/buscar-vuelos', [RegistroVuelosController::class, 'buscar'])->name('rutaBuscarVuelos');
Route::get('/vuelos/{id}', [RegistroVuelosController::class, 'verMas'])->name('verMasVuelo');




// Rutas del controlador de hoteles (RegistroHotelesController)
Route::resource('registroHoteles', RegistroHotelesController::class);
Route::get('/registroHoteles', [RegistroHotelesController::class, 'create'])->name('rutaregistro_hoteles');
Route::get('/CRUDhoteles', [RegistroHotelesController::class, 'index'])->name('rutaCRUDhoteles');
Route::get('/hoteles', [RegistroHotelesController::class, 'buscar'])->name('rutahoteles');
Route::get('/hoteles', [RegistroHotelesController::class, 'mostrarHoteles'])->name('rutahoteles');
Route::get('/buscar-hoteles', [RegistroHotelesController::class, 'buscar'])->name('rutaBuscarHoteles');
Route::get('/hoteles/{id}', [RegistroHotelesController::class, 'verHotel'])->name('verHotel');




// Rutas de autenticación
Route::get('/email/verify/{token}', [RegistroController::class, 'verifyEmail'])->name('verification.verify');
Route::get('/verify-email/{token}', [RegistroController::class, 'verifyEmail'])->name('verify.email');
Route::get('/verificar-correo/{token}', [RegistroController::class, 'verifyEmail'])->name('verify.email');



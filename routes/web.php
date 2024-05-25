<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurnoController;

Route::resource('turnos', TurnoController::class);
Route::resource('index', TurnoController::class);
Route::get('/turnos', [TurnoController::class, 'index'])->name('turnos.index');

Route::get('/turno/generar', [TurnoController::class, 'generarTurno'])->name('generar_turno');

Route::get('turnos/{idturnos}', [App\Http\Controllers\TurnoController::class, 'show']);

Route::get('turnos/{idturnos}', [TurnoController::class, 'show']); 


// Ruta para la página de inicio
Route::get('/', function () {
    //  try {
    //     DB::connection()->getPdo();
    // } catch (\Exception $e) {
    //     die("Could not connect to the database. Please check your configuration. error:" . $e );
    // } 
    return view('home');
})->name('home');

// Ruta para la página de solicitud de turnos
Route::get('/turnos', function () {
    return view('turnos');
})->name('turnos');

// Ruta para la página de solicitud de citas médicas
Route::get('/citas', function () {
    return view('citas');
})->name('citas');

Route::get('/citas', function () {
    return view('citas');
})->name('citas');

// Ruta para manejar la solicitud de citas médicas (POST)
Route::post('/citas', 'App\Http\Controllers\AppointmentController@store')->name('citas.store');

// Ruta para la página de pago de facturas
Route::get('/facturas', function () {
    return view('facturas');
})->name('facturas');

// Ruta para manejar el pago de facturas (POST)
Route::post('/facturas', 'App\Http\Controllers\BillingController@store')->name('facturas.store');

// Ruta para la página de autorización de medicamentos
Route::get('/medicamentos', function () {
    return view('medicamentos');
})->name('medicamentos');

// Ruta para manejar la autorización de medicamentos (POST)
Route::post('/medicamentos', 'App\Http\Controllers\MedicationController@store')->name('medicamentos.store');

// Ruta para la página de información general
Route::get('/informacion', function () {
    return view('informacion');
})->name('informacion');

// Ruta para manejar las solicitudes de información general (POST)
Route::post('/informacion', 'App\Http\Controllers\InformationController@store')->name('informacion.store');

Route::view('/pantalla', 'pantalla');


Route::post('index/{turno}/llamar', [TurnoController::class, 'llamar'])->name('turnos.llamar');
Route::post('turnos/{turno}/atender', [TurnoController::class, 'atender'])->name('turnos.atender');
Route::post('turnos/{turno}/atendido', [TurnoController::class, 'atendido'])->name('turnos.atendido');
Route::post('turnos/{turno}/cancelar', [TurnoController::class, 'cancelar'])->name('turnos.cancelar');
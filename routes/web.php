<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('/home/home');
});

Route::post(
    '/users',
    [\App\Http\Controllers\UserController::class, 'saveReport']
);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/registros',
        \App\Http\Controllers\RegistroController::class);

    Route::resource('/vehiculos',
        \App\Http\Controllers\VehiculoController::class);

    Route::resource('/polisas',
        \App\Http\Controllers\PolizaController::class);

    Route::resource('/pagos',
        \App\Http\Controllers\PagoController::class);
});

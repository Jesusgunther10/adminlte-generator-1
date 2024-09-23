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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['permission:ver|editar|eliminar|crear']], function () {

Route::resource('categorias', App\Http\Controllers\CategoriasController::class);
Route::resource('bloques', App\Http\Controllers\BloquesController::class);
Route::resource('movimientos', App\Http\Controllers\MovimientosController::class);
Route::resource('tarifas', App\Http\Controllers\TarifasController::class);
Route::resource('estacionamientos', App\Http\Controllers\EstacionamientoController::class);

});


Route::resource('users', App\Http\Controllers\UserController::class);


Route::resource('roles', App\Http\Controllers\RoleController::class);

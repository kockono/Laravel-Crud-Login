<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiDeFotos;

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

// Le pasamos como parametro del controlador el index que es el metodo main
Route::get('/fotos', [ApiDeFotos::class, 'index']);


Route::resource('usuarios', App\Http\Controllers\UsuarioController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

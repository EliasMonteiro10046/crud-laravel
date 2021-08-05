<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\OperadoraController;
use App\Http\Controllers\TelefoneController;
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

Route::resource('cliente', ClienteController::class);
Route::resource('operadora', OperadoraController::class);
Route::resource('telefone', TelefoneController::class);

Route::get('/', function () {
    return view('welcome');
});

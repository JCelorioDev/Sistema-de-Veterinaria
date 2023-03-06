<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Paginas.app');
});

Route::get('Principal',[MenuController::class,'view_principal']);
Route::get('Servicios',[MenuController::class,'view_service']);
Route::get('Galeria',[MenuController::class,'view_gallery']);
Route::get('Registro',[MenuController::class,'view_registro']);
Route::get('Tienda',[MenuController::class,'view_tienda']);
Route::post('Guardar',[MenuController::class,'save']);
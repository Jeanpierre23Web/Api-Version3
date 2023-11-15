<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlmacenController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("/almacen",[AlmacenController::class,"Listar"]);

Route::post("/almacen/{d}",[AlmacenController::class,"ListarUno"]);

Route::post("/almacen",[AlmacenController::class,"InsertarUno"]);

Route::post("/almacen",[AlmacenController::class,"Modificar"]);

Route::post("/almacen",[AlmacenController::class,"Eliminar"]);

Route::get("/traffic",[TrafficController::class,"Listar"]);

Route::post("/traffic/{d}",[TrafficController::class,"ListarUno"]);

Route::post("/traffic",[TrafficController::class,"InsertarUno"]);

Route::post("/traffic",[TrafficController::class,"Modificar"]);

Route::post("/traffic",[TrafficController::class,"Eliminar"]);


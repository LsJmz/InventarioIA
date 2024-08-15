# Proyecto: Inventario con inteligencia Artificial
# Responsable: Gutiérrez Chávez Francisco
# Version: 2.0 Actializada
# Fecha de creacion: 12/06/2024
# Fecha de modificación: 18/07/2024
# Descripcion
# Este archivo estarán registraremos las rutas API para generar su aplicación, 
# las rutas se generarán dentro del grupo que se signe.

<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

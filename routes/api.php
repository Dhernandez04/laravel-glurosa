<?php

use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\FaqController;
use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UploadController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\Api\TemporalCompraController;
use App\Http\Controllers\Api\UserController;
// use App\Http\Controllers\UploadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group([

    // 'middleware' => 'api',
    'prefix' => 'auth'

], function () {

   Route::post('registro',[AuthController::class,'registro']);
   Route::post('login',[AuthController::class,'login']);
   Route::post('logout',[AuthController::class,'logout']);
});
Route::get('productos/buscarpornombre/{termino}',[ProductoController::class,'buscarPorNombre']);

Route::get('categorias/reingresar/{id}',[CategoriaController::class,'reingresar']);
Route::get('categorias/productos/{id}',[ProductoController::class,'showProductos']);
Route::get('categorias/validarslug/{slug}',[CategoriaController::class,'validarslug']);

Route::apiResource('compras',CompraController::class);
Route::get('compras/temporal/{id_producto}/{cantidad}',[TemporalCompraController::class,'insertar']); 
Route::apiResource('categorias',CategoriaController::class);
Route::apiResource('productos',ProductoController::class);
Route::apiResource('faqs',FaqController::class);
Route::apiResource('users',UserController::class);
Route::put('users/update/{id}',[UserController::class,'update']);
Route::apiResource('roles',RoleController::class);

Route::post('upload/{tipo}/{id}', [UploadController::class,'store']);
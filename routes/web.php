<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',[HomeController::class,'index']);




// Route::resource('categorias', CategoriaController::class);
// // Route::get('/categorias',[CategoriaController::class,'index'])->name('categorias.index');
// // Route::get('/categorias/create',[CategoriaController::class,'create'])->name('categorias.create');
// // Route::get('/categorias/show/{id}',[CategoriaController::class,'show'])->name('categorias.show');

// Route::get('/admin',function(){
//     return view('layout.admin');
// });

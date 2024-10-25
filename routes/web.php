<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
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
            //la barra significa la página principal osea el home
            //funcion:conjunto de instrucciones que ejecutan una operación
Route::get('/', function () {//Ruta de bienvenida 
    return view('index');
})-> name('index');

/*
Route::get('/products',function(){
    c
})-> name('products');
*/
Route::get('/indexProducts',[ProductController::class,'index'])->name('products'); //llama la primera funcion del controlador
Route::get('/indexProducts',[ProductController::class,'create'])->name('pcreate'); //llama la primera funcion del controlador
Route::get('/indexProducts',[ProductController::class,'store {$strore}'])->name('pstore'); //llama la primera funcion del controlador
Route::get('/indexProducts',[ProductController::class,'edit'])->name('pedit'); //llama la primera funcion del controlador
Route::get('/indexProducts',[ProductController::class,'update {$store,$product}'])->name('pupdate'); //llama la primera funcion del controlador
Route::get('/indexProducts',[ProductController::class,'show'])->name('pshow'); //llama la primera funcion del controlador
Route::get('/indexProducts',[ProductController::class,'destroy {$product}'])->name('pdestroy'); //llama la primera funcion del controlador


Route::resource('/products',ProductController::class);//Es igual a las lineas que se ejecutaron antes del create,index,update,edit...etc.

Route::get('/clients',function(){
    return view('clients_index');
})-> name('clients');

Route::get('/sales',function(){
    return view('sales_index');
})-> name('sales');
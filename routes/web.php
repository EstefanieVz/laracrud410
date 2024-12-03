<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
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

Route::get('/indexProducts',[ProductController::class,'index'])->name('products'); //llama la primera funcion del controlador
Route::get('/createProducts',[ProductController::class,'create'])->name('pcreate'); //llama la primera funcion del controlador
Route::post('/storeProducts/{store}',[ProductController::class,'store'])->name('pstore'); //llama la primera funcion del controlador
Route::get('/editProducts/{product}/edit',[ProductController::class,'edit'])->name('pedit'); //llama la primera funcion del controlador
Route::put('/updateProducts/{product}',[ProductController::class,'update'])->name('pupdate'); //llama la primera funcion del controlador
Route::get('/showProducts/{product}',[ProductController::class,'show'])->name('pshow'); //llama la primera funcion del controlador
Route::delete('/destroyProducts/{product}',[ProductController::class,'destroy'])->name('pdestroy'); //llama la primera funcion del controlador
*/

//Ruta Tipo Recursos para métodos REST, que permiten crear las rutas para un CRUD de las 7 funciones de un controller.
Route::resource('/products',ProductController::class);//Es igual a las lineas que se ejecutaron antes del create,index,update,edit...etc.
                                   //nombre de la funcion que se manda a llamar (delete)
Route::get('/products/{product}/delete',[App\Http\Controllers\ProductController::class,'delete'])->name('products.delete');
Route::get('/addresses/{address}/delete',[App\Http\Controllers\AddressController::class,'delete'])->name('addresses.delete');
Route::get('/brands/{brand}/delete',[App\Http\Controllers\BrandController::class,'delete'])->name('brands.delete');
Route::get('/clients/{client}/delete',[App\Http\Controllers\ClientController::class,'delete'])->name('clients.delete');
Route::get('/sales/{sale}/delete',[App\Http\Controllers\SaleController::class,'delete'])->name('sales.delete');
Route::resource('/brands',BrandController::class);
Route::resource('/clients',App\Http\Controllers\ClientController::class);
Route::resource('/addresses',App\Http\Controllers\AddressController::class);
Route::resource('/sales',App\Http\Controllers\SaleController::class);
/*
Route::get('/clients',function(){
    return view('clients_index');
})-> name('clients');

Route::get('/sales',function(){
    return view('sales_index');
})-> name('sales');
*/                                                     

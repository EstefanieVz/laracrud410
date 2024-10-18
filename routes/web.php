<?php

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

Route::get('/products',function(){
    return view('products_index');
})-> name('products');

Route::get('/clients',function(){
    return view('clients_index');
})-> name('clients');

Route::get('/sales',function(){
    return view('sales_index');
})-> name('sales');
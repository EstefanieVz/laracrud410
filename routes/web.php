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
    return view('welcome');
});

Route::get('/testView', function () {//Ruta de vista de testView
    return view('testView'); //Nombre de la vista que esta en la carpeta de "views"
});

//
Route::get('/texto', function () {
    echo "Hi World";
    echo"<h1>Hola Mundo</h1>";
});

//
Route::get('/echo', function () {
    echo view('test2');
});

//
Route::get('/rutas', function () {
    return "Podemos Tener Rutas tipo GET,POST, DELETE , PATCH";
});

Route::get('/custom',function(){
    $msj="Mensaje desde el servidor";
    $id="500";
    return view('custom',['msj'=> $msj,"identi"=>$id,"A"=>29]);
});

Route::get('/contact',function(){
    return view('contacto');
})->name('contact');

Route::get('/testdb',[TestController::class, 'test']);//Ruta para obtener el controlador que llama a una funcion que esta dentro de la clase del controlador
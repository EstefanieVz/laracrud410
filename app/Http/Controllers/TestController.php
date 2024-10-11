<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //Crear un método o función
    function test(){
        //1. Conectar con el modelo que conecta con la base de datos
        $client = Client::find(1);
        var_dump($client);//Imprimir todos los datos de paso
        // 2. Retornar una vista con la información del modelo 
        return view('testdb',['client'=>$client]);//se pasa la información desde la base de datos
    } 
}

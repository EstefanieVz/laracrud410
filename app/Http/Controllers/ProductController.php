<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('products_index');
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //echo "Create Productos";
        return view('products_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        echo "Store Productos";
        //dd($request);
        Product::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        echo "Show Productos";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        echo "Edit Productos";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
        echo "Update Productos";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        echo "Destroy Productos";
    }
}
/*
terminal:
php artisan make:view fragments.formstyle

products_create.blade.php
@incluide('fragments.formstyles)
Agregar en el form
@csrf
Agregar en form action="{{route('products.store)}}"


formstyles.blade.php
<style>
*{
box-sizing:border-box;
}
form{
width:300px;
padding-inline:20px;
border-radius: 12px;
margin-block:auto;
margin-inline:auto;
background-color:#447a6e;
}
form label{
width:140px;
height:10px;
font-weight:bold;
font-family:Arial,Helvetica,sans-serif;
display:inline-block;
}
form input[type="text"],form input[type="number]{
width:200px;
padding-block: 3px;
border: 1px solid #ffffff;
border-radius: 3px;
background-color: #000;
magin-block: 4px;
display:flex;
}
form button[type="submit"]{
width:100%;
padding8px 16px;
margin-block-start: 32px;
border-radius: 5px;
display:block;
color:#fff;
background-color:#000;
}
</style>

Modelo Product.php se colca dentro de la case products extendes Model
use HasFactory;
protected $filelable=[
'nameProducts','brand','stock','unit_price','imagen'];

*/
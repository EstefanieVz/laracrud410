<?php

namespace App\Http\Controllers;

use App\Models\Brand;
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
        $products =Product::get();//Obtener todos los datos de la tabla

        return view('products_index',compact('products'));
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //echo "Create Productos";
        //$brands = Brand::get(); //Para obtener todos los datos de una tabla
        $brands=Brand::pluck('id','brand');
        //dd($brands);//Verificar que los datos se esten extrallendo
        return view('products_create',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //echo "registro Realizado";
        //dd($request);
        Product::create($request->all());
        return to_route('products.index')->with ('status','Producto Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        
        return view('products_show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        $brands=Brand::pluck('id','brand');
        echo view('products_edit',compact('brands','product'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
        $product->update($request->all()); //Actualizamos los datos en la base de datos
        return to_route('products.index')->with ('status','Producto Actualizado');
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

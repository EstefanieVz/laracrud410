<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

use function PHPSTORM_META\override;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products =Product::get();//Obtener todos los datos de la tabla

        return view('admin/products/index',compact('products'));
        

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
        return view('admin/products/create',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //echo "registro Realizado";
        //dd($request);

        $data=$request->all();//Pasamos todos los datos
        if(isset($data["imagen"])){//Si imagen es diferente de vacio
            //Cambiar nombre al archivo a ugardar
            //Variable de imagen  se le asiagna un nuevo nombre(el nombre del archivo.tiempo/fecha/hora. tipo(jpeg,jpg,png))
            $data["imagen"]=$filename=time().".".$data["imagen"]->extension();
            //Guardar imagen en la carpeta publica
            $request->imagen->move(public_path("image/products"),$filename);
        }

        Product::create($data);
        return to_route('products.index')->with ('status','Producto Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return view('admin/products/show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        $brands=Brand::pluck('id','brand');
        echo view('admin/products/edit',compact('brands','product'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
        $data=$request->all();//Pasamos todos los datos
        if(isset($data["imagen"])){//Si imagen es diferente de vacio
            //Cambiar nombre al archivo a ugardar
            //Variable de imagen  se le asiagna un nuevo nombre(el nombre del archivo.tiempo/fecha/hora. tipo(jpeg,jpg,png))
            $data["imagen"]=$filename=time().".".$data["imagen"]->extension();
            //Guardar imagen en la carpeta publica
            $request->imagen->move(public_path("image/products"),$filename);
        }

        $product->update($data); //Actualizamos los datos en la base de datos
        return to_route('products.index')->with ('status','Producto Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Product $product){
        echo view('admin/products/delete',compact('product'));
    }
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return to_route('products.index')->with('status','Producto Eliminado');
    }
}

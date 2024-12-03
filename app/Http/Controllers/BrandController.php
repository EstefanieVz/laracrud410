<?php

namespace App\Http\Controllers;

use App\Http\Requests\Brands\StoreRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::paginate(3);

        return view('admin/brands/index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands=Brand::pluck('id','brand');
        //dd($brands);//Verificar que los datos se esten extrallendo
        return view('admin/brands/create',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
        Brand::create($request->all());
        return to_route('products.index')->with ('status','Marca Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
        return view('admin/brands/show',compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
        echo view('admin/brands/edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        //
        $brand->update($request->all()); //Actualizamos los datos en la base de datos
        return to_route('brands.index')->with ('status','Marca Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Brand $brand){
        echo view('admin/brands/delete',compact('brand'));
    }
    public function destroy(Brand $brand)
    {
        //
        $brand->delete();
        return to_route('brands.index')->with('status','Marca Eliminada');
    }
}

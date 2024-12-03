<?php

namespace App\Http\Controllers;

use App\Http\Requests\Sales\StoreRequest;
use App\Models\Client;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sales = Sale::paginate(3);
        return view('admin/sales/index',compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //clientes
        $clients=Client::pluck('id','name');
        //productos
        $products=Product::pluck('id','name_product');

        return view('admin/sales/create',compact('clients','products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //falta store request
        $data=$request->all();//Pasamos todos los datos

        Sale::create($data);
        return to_route('sales.index')->with ('status','Venta Registrada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        //
        return view('admin/sales/show',compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        //
        $clients=Client::pluck('id','name');
        $products=Product::pluck('id','name_product');
        echo view('admin/sales/edit',compact('clients','products','sale'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sale $sale)
    {
        //
        $data=$request->all();
        $sale->update($data); //Actualizamos los datos en la base de datos
        return to_route('sales.index')->with ('status','Venta Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Sale $sale){
        echo view('admin/sales/delete',compact('sale'));
    }
    public function destroy(Sale $sale)
    {
        //
        $sale->delete();
        return to_route('sales.index')->with('status','Venta Eliminada');
    }
}

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
        echo "Index Productos";

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        echo "Create Productos";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        echo "Store Productos";
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

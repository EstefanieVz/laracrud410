<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\StoreRequest;
use App\Models\Client;
use App\Models\Address;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clients = Client::paginate(3);
        return view('admin/clients/index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin/clients/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //falta el storereguest
        $data=$request->all();
        Client::create($data);
        return to_route('clients.index')->with ('status','Cliente Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
        return view('admin/clients/show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
        echo view('admin/clients/edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
        $data=$request->all();
        $client->update($data); //Actualizamos los datos en la base de datos
        return to_route('clients.index')->with ('status','Cliente Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Client $client){
        echo view('admin/clients/delete',compact('client'));
    }
    public function destroy(Client $client)
    {
        //
        $client->delete();
        return to_route('clients.index')->with('status','Cliente Eliminado');
    }
}

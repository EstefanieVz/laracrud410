@extends('layout.main_template')
@section('content')

<style>
    
</style>

<h1>Detalles de la Venta</h1>

<h3>Cliente: {{$sale->client->name}}</h3>
<h3>Producto: {{$sale->product->name_product}}</h3>
<h3>Fecha: {{$sale->sale_date}}</h3>


<!-- TODO Show Image -->

@endsection

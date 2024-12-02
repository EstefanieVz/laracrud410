@extends('layout.main_template')
@section('content')

<style>
    
</style>
<h1>Detalles del Producto</h1>
<h3>Producto: {{$product->name_product}}</h3>
<h3>Cantidad: {{$product->stock}}</h3>
<h3>Precio: {{$product->unit_price}}</h3>
<h3>Imagen:{{$product->image}}</h3>

<!-- TODO Show Image -->

@endsection
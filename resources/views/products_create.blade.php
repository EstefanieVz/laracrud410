@extends('layout.main_template')
@section('content')
@incluide('fragments.formstyles')

<h1> Create de Productor</h1>
<form action="{{route('products.store')}}" method="POST">
    @csrf
    <label for="" class="">Nombre Producto</label>
    <input type="text" name="nameProduct">

    <label for="" class="">Marca</label>
    <input type="text" name="brand">

    <label for="" class="">Cantidad</label>
    <input type="number" name="stock">

    <label for="" class="">Precio Unitario</label>
    <input type="text" name="unit_price">

    <label for="" class="">Imagen</label>
    <input type="text" name="imagen">

    <button type="submit">Registrar</button>
</form>
@endsection
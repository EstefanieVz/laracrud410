@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<h1 id="titulo"> Editar Productos</h1>
<form action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <br>
    <label for="" class="">Nombre Producto</label>
    <input type="text" name="nameProduct"  value="{{$product->nameProduct}}">

    <label for="" class="">Marca</label>
    <br>
    <select name="brand_id" id="">
        <option value="">Selecciona. . .</option>

        @foreach ($brands as $brand => $id)
        <option {{$product->brand_id==$id ? 'selected' : ''}} value="{{$id}}">{{$brand}}</option>     
        @endforeach
        
    </select>
    <br>
    <label for="" class="">Cantidad</label>
    <input type="number" name="stock" value="{{$product->stock}}">

    <label for="" class="">Precio Unitario</label>
    <input type="text" name="unit_price" value="{{$product->unit_price}}">

    <label for="" class="">Imagen</label>
    <input type="file" name="imagen">

    <button type="submit">Registrar</button>
</form>
@endsection
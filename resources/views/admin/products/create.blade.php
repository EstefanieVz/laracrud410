@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<h1 id="titulo"> Create de Productos</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif

<form action="{{route('products.store')}}" enctype="multipart/form-data" method="POST">
    @csrf
    <br>
    <label for="" class="">Nombre Producto</label>
    <input type="text" name="name_product">

    <label for="" class="">Marca</label>
    <br>
    <select name="brand_id" id="">
        <option value="">Selecciona. . .</option>
        @foreach ($brands as $brand => $id)
        <option value="{{$id}}">{{$brand}}</option>     
        @endforeach
        
    </select>
    <br>
    <label for="" class="">Cantidad</label>
    <input type="number" name="stock">

    <label for="" class="">Precio Unitario</label>
    <input type="text" name="unit_price">

    <label for="" class="">Imagen</label>
    <input type="file" name="image">

    <button type="submit">Registrar</button>
</form>
@endsection
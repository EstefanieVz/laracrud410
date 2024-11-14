@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<h1 id="titulo"> Editar Marca</h1>
<form action="{{route('brands.update',$brand->id)}}" method="POST">
    @csrf
    @method('PUT')
    <br>
    <label for="" class="">Nombre de la Marca</label>
    <input type="text" name="brand"  value="{{$brand->brand}}">
<br>
    <label for="" class="">Descripción</label>
    <input type="text" name="description" value="{{$brand->description}}">



    <button type="submit">Guardar</button>
</form>
@endsection

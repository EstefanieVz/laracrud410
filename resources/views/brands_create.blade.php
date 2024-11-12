@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<h1 id="titulo"> Create de Marcas</h1>
<form action="{{route('brands.store')}}" method="POST">
    @csrf
    <br>
    <label for="" class="">Marca</label>
    <input type="text" name="brand">

    <label for="" class="">Descripción</label>
    <input type="text" name="description">

    <button type="submit">Registrar</button>
</form>
@endsection
@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')
<style>
    .formregistro{
  width:250px;
  height: 200px;
  padding-inline:20px;
  border-radius: 12px;
  margin-block:auto;
  margin-inline:auto;
  background-color:#f06575;
  }
  </style>
<h1 id="titulo"> Create de Marcas</h1>
<form action="{{route('brands.store')}}" method="POST" class="formregistro">
    @csrf
    <br>
    <label for="" class="">Marca</label>
    <input type="text" name="brand">

    <label for="" class="">Descripción</label>
    <input type="text" name="description">

    <button type="submit">Registrar</button>
</form>
@endsection
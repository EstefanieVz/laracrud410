@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')
<style>
        .formregistro{
  width:200px;
  height: 280px;
  text-align: justify;
  background-color:#f06575;
  }
  </style>
</style>
<h1 id="titulo"> Editar Venta</h1>
<form action="{{route('sales.update',$sale->id)}}" method="POST" enctype="multipart/form-data" class="formregistro">
    @csrf
    @method('PUT')
    <br>
    
    <label for="" class="">Cliente</label>
    <br>
    <select name="client_id" id="">
        <option value="">Selecciona. . .</option>

        @foreach ($clients as $client => $id)
        <option {{$sale->client_id==$id ? 'selected' : ''}} value="{{$id}}">{{$client}}</option>     
        @endforeach
        
    </select>
    <br>

    <label for="" class="">Producto</label>
    <br>
    <select name="product_id" id="">
        <option value="">Selecciona. . .</option>

        @foreach ($products as $product => $id)
        <option {{$sale->product_id==$id ? 'selected' : ''}} value="{{$id}}">{{$product}}</option>     
        @endforeach
        
    </select>
    <br>

    <label for="" class="">Fecha</label>
    <input type="date" name="sale_date"  value="{{$sale->sale_date}}">

    

    <button type="submit">Registrar</button>
</form>
@endsection
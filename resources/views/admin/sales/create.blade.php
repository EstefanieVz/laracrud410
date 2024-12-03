@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')
<style>
    .formregistro{
  width:200px;
  height: 280px;
  text-align: justify;
  background-color:#9d4edd;
  }
  </style>
<h1 id="titulo">Ventas</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif

<form action="{{route('sales.store')}}" enctype="multipart/form-data" method="POST" class="formregistro">
    @csrf

    <br>
    <label for="" class="">Cliente</label>
    <br>
    <select name="client_id" id="">
        <option value="">Selecciona. . .</option>
        @foreach ($clients as $client => $id)
        <option value="{{$id}}">{{$client}}</option>     
        @endforeach
    </select>
    <br><br>


    <label for="" class="">Producto</label>
    <br>
    <select name="product_id" id="">
        <option value="">Selecciona. . .</option>
        @foreach ($products as $product => $id)
        <option value="{{$id}}">{{$product}}</option>     
        @endforeach
        
    </select>
    <br><br>
    <label for="" class="">Fecha de la Venta</label>
    <br>
    <input type="date" name="sale_date">


    <button type="submit">Registrar</button>
</form>
@endsection
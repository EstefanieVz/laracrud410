@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')
<style>
    .formregistro{
  width:250px;
  height: 600px;
  padding-inline:20px;
  border-radius: 12px;
  margin-block:auto;
  margin-inline:auto;
  background-color:#9d4edd;
  }
  </style>
<h1 id="titulo"> Editar Direcciones</h1>

<form action="{{route('addresses.update',$address->id)}}" method="POST" enctype="multipart/form-data" class="formregistro">
    @csrf
    @method('PUT')
    <br>
    <label for="" class="">Calle</label>
    <input type="text" name="street" value="{{$address->street}}">


    <label for="" class="">Cliente</label>
    <br>
    <select name="client_id" id="">
        <option value="">Selecciona. . .</option>

        @foreach ($clients as $client => $id)
        <option {{$address->client_id==$id ? 'selected' : ''}} value="{{$id}}">{{$client}}</option>     
        @endforeach
        
    </select>
    <br>

    <label for="" class="">No. Interno</label>
    <input type="number" name="internal_num" value="{{$address->internal_num}}">

    <label for="" class="">No. Externo</label>
    <input type="number" name="external_num" value="{{$address->external_num}}">

    <label for="" class="">Vecindario</label>
    <input type="text" name="neighborhood" value="{{$address->neighborhood}}">

    <label for="" class="">Ciudad</label>
    <input type="text" name="town" value="{{$address->town}}">

    <label for="" class="">Estado</label>
    <input type="text" name="state" value="{{$address->state}}">

    <label for="" class="">País</label>
    <input type="text" name="country" value="{{$address->country}}">

    <label for="" class="">Código Postal</label>
    <input type="number" name="postal_code" value="{{$address->postal_code}}">

    <label for="" class="">Referencia</label>
    <input type="text" name="references" value="{{$address->references}}">

    <button type="submit">Registrar</button>
</form>
@endsection
@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<h1 id="titulo"> Create de Direcciones</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif
<style>
      .formregistro{
    width:250px;
    height: 600px;
    padding-inline:20px;
    border-radius: 12px;
    margin-block:auto;
    margin-inline:auto;
    background-color:#f06575;
    }
    </style>
<form action="{{route('addresses.store')}}" enctype="multipart/form-data" method="POST" class="formregistro">
    @csrf
    <br>
    <label for="" class="">Calle</label>
    <input type="text" name="street">

    <label for="" class="">Cliente</label>
    <br>
    <select name="client_id" id="">
        <option value="">Selecciona. . .</option>
        @foreach ($clients as $client => $id)
        <option value="{{$id}}">{{$client}}</option>     
        @endforeach 
    </select>
    <br>

    <label for="" class="">No. Interno</label>
    <input type="number" name="internal_num">

    <label for="" class="">No. Externo</label>
    <input type="number" name="external_num">

    <label for="" class="">Vecindario</label>
    <input type="text" name="neighborhood">

    <label for="" class="">Ciudad</label>
    <input type="text" name="town">

    <label for="" class="">Estado</label>
    <input type="text" name="state">

    <label for="" class="">País</label>
    <input type="text" name="country">

    <label for="" class="">Código Postal</label>
    <input type="number" name="postal_code">

    <label for="" class="">Referencia</label>
    <input type="text" name="references">


    <button type="submit">Registrar</button>
</form>
@endsection
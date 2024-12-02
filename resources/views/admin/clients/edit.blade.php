@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<h1 id="titulo"> Editar Cliente</h1>
<form action="{{route('clients.update',$client->id)}}" method="POST">
    @csrf
    @method('PUT')
    <br>
    <label for="" class="">Nombre</label>
    <input type="text" name="name"  value="{{$client->name}}">
<br>
    <label for="" class="">Apellido Paterno</label>
    <input type="text" name="last_name" value="{{$client->last_name}}">
    <br>
    <label for="" class="">Apellido Materno</label>
    <input type="text" name="second_last_name" value="{{$client->second_last_name}}">
    <br>
    <label for="" class="">Correo</label>
    <input type="text" name="email" value="{{$client->email}}">
    <br>
    <label for="" class="">No. Teléfono</label>
    <input type="number" name="phone" value="{{$client->phone}}">


    <button type="submit">Guardar</button>
</form>
@endsection

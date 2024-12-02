@extends('layout.main_template')
@section('content')
@include('fragments.formstyle')

<h1 id="titulo"> Create de Clientes</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>
    @endforeach
@endif

<form action="{{route('clients.store')}}" enctype="multipart/form-data" method="POST">
    @csrf
    <br>
    <label for="" class="">Nombre</label>
    <input type="text" name="name">

    <label for="" class="">Apellido Paterno</label>
    <input type="text" name="last_name">

    <label for="" class="">Apellido Materno</label>
    <input type="text" name="second_last_name">

    <label for="" class="">Correo</label>
    <input type="text" name="email">

    <label for="" class="">No. Teléfono</label>
    <input type="number" name="phone">

    <button type="submit">Registrar</button>
</form>
@endsection
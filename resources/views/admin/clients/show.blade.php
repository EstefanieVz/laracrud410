@extends('layout.main_template')
@section('content')

<style>
    
</style>
<h1>Detalles del Cliente</h1>
<h3>Nombre: {{$client->name}}</h3>
<h3>Apellido Paterno: {{$client->last_name}}</h3>
<h3>Apellido Materno: {{$client->second_last_name}}</h3>
<h3>Correo: {{$client->email}}</h3>
<h3>Teléfono: {{$client->phone}}</h3>
<!-- TODO Show Image -->

@endsection
@extends('layout.main_template')
@section('content')

<h1>Detalles de la marca</h1>
<h3>Nombre de la marca: {{$brand->brand}}</h3>
<h3>Descripción: {{$brand->description}}</h3>
<!-- TODO Show Image -->

@endsection

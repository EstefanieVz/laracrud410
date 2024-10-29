@extends('layout.main_template')
@section('content')
<h2>Index Products</h2>
<br>
<button><a href="{{route('products.create')}}">Crear Producto</a></button>
@endsection
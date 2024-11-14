@extends('layout.main_template')
@section('content')

<form action="{{route("products.destroy",$product->id)}}" method="POST">
    @method("DELETE")
    @csrf
    <h3>¡Estas seguro que quieres eliminar el producto {{$product->nameProduct}}?</h3>
    <button><a href="{{route("products.index")}}">No</a></button><!--Redirecciona a index -->
    <button type="submit">Si</button><<!-- Redirecciona a Destroy y elimina -->
</form>

@endsection

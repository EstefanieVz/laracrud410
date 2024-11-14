@extends('layout.main_template')
@section('content')
<h2>Index Marcas</h2>
<br>
<button><a href="{{route('products.create')}}">Crear Producto</a></button>

<button><a href="{{route('brands.create')}}">Crear Marcas</a></button>
<button><a href="{{route('brands.index')}}">Ver Marcas</a></button>
<br>
<br><br>

<h1>Detalles de la marca</h1>
<table>
    <thead>
        <th> Nombre de la marca </th>
        <th> Descripción </th>
    </thead>

    <tbody>
        @foreach ($brands as $b)
        <tr>
            <td>{{$b->brand}}</td>
            <td>{{$b->description}}</td>
            <td>
                <button><a href="{{route("brands.show",$b)}}">Mostrar</a></button>
                <button><a href="{{route("brands.edit",$b)}}">Editar</a></button>
                <form action="{{route("brands.destroy",$b)}}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Eliminar</button>
                </form>
                
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
<!-- TODO Show Image -->

@endsection
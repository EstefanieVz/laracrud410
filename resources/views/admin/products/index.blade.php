@extends('layout.main_template')
@section('content')
<h2>Index Products</h2>
<br>
<button><a href="{{route('products.create')}}">Crear Producto</a></button>

<button><a href="{{route('brands.create')}}">Crear Marcas</a></button>
<button><a href="{{route('brands.index')}}">Ver Marcas</a></button>
<br>
<br><br>
<table>
    <thead>
        <th> Nombre del producto </th>
        <th> Marca </th>
        <th> Cantidad </th>
        <th> Precio </th>
        <th> Imagen </th>
        <th> Acciones </th>
    </thead>

    <tbody>
        @foreach ($products as $p)
        <tr>
            <td>{{$p->nameProduct}}</td>
            
            <td>{{$p->brand->brand}}</td>
            <td>{{$p->stock}}</td>
            <td>{{$p->unit_price}}</td>
            <td><img src="/image/products/{{$p->imagen}}" width="60" alt="Producto"></td>
            <td>
                <button><a href="{{route("products.show",$p)}}">Mostrar</a></button>
                <button><a href="{{route("products.edit",$p)}}">Editar</a></button>
                <form action="{{route("products.destroy",$p)}}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Eliminar</button>
                </form>
                
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>

{{$products->links()}}<!-- GENERA LOS ENLACES DE CADA PÁGINA-->

@endsection
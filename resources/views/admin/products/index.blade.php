@extends('layout.main_template')
@section('content')
<h2>Index Products</h2>
<br>
<button><a href="{{route('products.create')}}">Crear Producto</a></button>

<button><a href="{{route('brands.create')}}">Crear Marcas</a></button>
<button><a href="{{route('brands.index')}}">Ver Marcas</a></button>
<br>
<br><br>
<table class="table table-hover">
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
                <a href="{{route("products.show",$p)}}" class="btn btn-outline-primary">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>

                <a href="{{route("products.edit",$p)}}" class="btn btn-outline-success">
                    <i class="fa-solid fa-pen"></i>
                </a>

                
                <form action="{{route("products.destroy",$p)}}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                </form>
                
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>

{{$products->links()}}<!-- GENERA LOS ENLACES DE CADA PÁGINA-->

@endsection
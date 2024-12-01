@extends('layout.main_template')

@section('content')

<style>
    .container{
        max-width: 1840px;
        width: 100%;
        background: #fff;
        box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
    }
    .container h2{
        padding: 2rem 1rem;
        font-size: 2.5rem;
        text-align: center;
    }
    .tbl{
        width: 100%;
        border-collapse: collapse;
    }
    .tbl thead{
        background: #424949;
        color: #fff;
    }
    .tbl thead th{
        font-size: 0.9rem;
        padding: 0.8rem;
        letter-spacing: 0.2rem;
        vertical-align: top;
        border: 1px solid #aab7b8;
    }
    .tbl tbody tr td{
        font-size: 1rem;
        letter-spacing: 0.2rem;
        font-weight: normal;
        text-align: center;
        border: 1px solid #aab7b8;
    }

    @media(max-width: 768px){
        .tbl thead{
            display: none;
        }
        .tbl tr,
        .tbl td{
            display: block;
            width: 100%;
        }
        .tbl tr{
            margin-bottom: 1rem;
        }
        .tbl td::before{
            content: "";
            position: absolute;
        }
    }
</style>

<h2>Index Products</h2>
<br>
<button><a href="{{route('products.create')}}">Crear Producto</a></button>

<button><a href="{{route('brands.create')}}">Crear Marcas</a></button>
<button><a href="{{route('brands.index')}}">Ver Marcas</a></button>
<br>
<br><br>
<div class="container">
    <div class="tbl_container">
        <h2>PRODUCTOS EN VENTA</h2>
<table class="tbl">
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
            <td><img src="/image/products/{{$p->image}}" width="60" alt="Producto"></td>
            <td>
                <button class="btn-show"><a href="{{route("products.show",$p)}}">Mostrar</a></button>
                <button class="btn-edit"><a href="{{route("products.edit",$p)}}">Editar</a></button>
                <form action="{{route("products.destroy",$p)}}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button class="btn-trash" type="submit">Eliminar</button>
                </form>
                
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
</div>
</div>
{{$products->links()}}<!-- GENERA LOS ENLACES DE CADA PÁGINA-->

@endsection
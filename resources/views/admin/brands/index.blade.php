@extends('layout.main_template')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .colore{
        background: #f06575;
    }
    .topcentral{
        text-align: center;
        margin-block:auto;
        margin-inline:auto;
    }
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
        background: #f06c7c;
        color: #000000;
    }
    .tbl thead th{
        font-size: 0.9rem;
        padding: 0.8rem;
        letter-spacing: 0.2rem;
        vertical-align: top;
        border: 1px solid #f09ca6;
    }
    .tbl tbody tr td{
        font-size: 1rem;
        letter-spacing: 0.2rem;
        font-weight: normal;
        text-align: center;
        border: 1px solid #f09ca6;
    }
    a{
        text-decoration: none;
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
<div class="topcentral">
<h2>MARCAS DULMEX</h2>
<br>
<button><a href="{{route('products.create')}}">Crear Producto</a></button>

<button><a href="{{route('brands.create')}}">Crear Marcas</a></button>
<button><a href="{{route('products.index')}}">Ver Productos</a></button>
<br>
</div>
<br><br>
<div class="container">
    <div class="tbl_container">
        <div class="colore">
<h2>Detalles de la Marca</h2>
</div>
<table class="tbl">
    <thead>
        <th> Nombre de la marca </th>
        <th> Descripción </th>
        <th> Acciones </th>
    </thead>

    <tbody>
        @foreach ($brands as $b)
        <tr>
            <td>{{$b->brand}}</td>
            <td>{{$b->description}}</td>
            <td>
                <button><a class="fa-solid fa-magnifying-glass" href="{{route("brands.show",$b)}}"></a></button>
                <button><a class="fa-solid fa-pen-to-square" href="{{route("brands.edit",$b)}}"></a></button>
                <button><a class="fa-solid fa-trash" href="{{route("brands.delete",$b)}}"></a></button>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
</div>
</div>
<!-- TODO Show Image -->

@endsection
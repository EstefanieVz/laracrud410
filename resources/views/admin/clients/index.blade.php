@extends('layout.main_template')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
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
<h2>CLIENTES DE DULMEX</h2>
<br>
<button><a href="{{route('clients.create')}}">Crear Clientes</a></button>

<button><a href="{{route('addresses.create')}}">Crear Direcciones</a></button>
<button><a href="{{route('addresses.index')}}">Ver Direcciones</a></button>
<br>

</div>
<br><br>
<div class="container">
    <div class="tbl_container">
        <h2>Clientes</h2>
<table class="tbl">
    <thead>
        <th> Nombre </th>
        <th> Apellido Paterno </th>
        <th> Apellido Materno </th>
        <th> Correo </th>
        <th> Telefono </th>
        <th> Acciones </th>
    </thead>

    <tbody>
        @foreach ($clients as $c)
        <tr>
            <td>{{$c->name}}</td>
            
            <td>{{$c->last_name}}</td>
            <td>{{$c->second_last_name}}</td>
            <td>{{$c->email}}</td>
            <td>{{$c->phone}}</td>
            <td>
                <button><a class="fa-solid fa-magnifying-glass" href="{{route("clients.show",$c)}}"></a></button>
                <button><a class="fa-solid fa-pen-to-square" href="{{route("clients.edit",$c)}}"></a></button>
                <button><a class="fa-solid fa-trash" href="{{route("clients.delete",$c)}}"></a></button>
                
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
</div>
</div>
{{$clients->links()}}<!-- GENERA LOS ENLACES DE CADA PÁGINA-->

@endsection

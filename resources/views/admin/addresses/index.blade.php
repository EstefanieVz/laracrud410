@extends('layout.main_template')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

<h2>Index Direcciones</h2>
<br>
<button><a href="{{route('addresses.create')}}">Crear Dirección</a></button>

<button><a href="{{route('clients.create')}}">Crear Clientes</a></button>
<button><a href="{{route('clients.index')}}">Ver Clientes</a></button>
<br>
<br><br>
<div class="container">
    <div class="tbl_container">
        <h2>DIRECCIONES</h2>
<table class="tbl">
    <thead>
        <th> Calle</th>
        <th> Cliente </th>
        <th> No. Interno </th>
        <th> No. Externo </th>
        <th> Vecindario </th>
        <th> Ciudad </th>
        <th> Estado </th>
        <th> País </th>
        <th> Código Postal </th>
        <th> Referencias </th>
        <th> Acciones </th>
    </thead>

    <tbody>
        @foreach ($addresses as $a)
        <tr>
            <td>{{$a->street}}</td>
            
            <td>{{$a->client->client}}</td>
            <td>{{$a->internal_num}}</td>
            <td>{{$a->external_num}}</td>
            <td>{{$a->neighborhood}}</td>
            <td>{{$a->town}}</td>
            <td>{{$a->state}}</td>
            <td>{{$a->country}}</td>
            <td>{{$a->postal_code}}</td>
            <td>{{$a->references}}</td>
            
            <td>
                <button><a class="fa-solid fa-magnifying-glass" href="{{route("addresses.show",$a)}}"></a></button>
                <button><a class="fa-solid fa-pen-to-square" href="{{route("addresses.edit",$a)}}"></a></button>
                <form action="{{route("addresses.destroy",$a)}}" method="POST">
                    @method("DELETE")
                    @csrf
                   <!-- <button class="btn-trash" type="submit">Eliminar</button> -->
                    <button class="fa-solid fa-trash" type="submit">
                       
                    </button >
                </form>
                
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
</div>
</div>
{{$addresses->links()}}<!-- GENERA LOS ENLACES DE CADA PÁGINA-->

@endsection
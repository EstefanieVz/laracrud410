<style>

    header{
        background: #f06c7c;
        padding-block: 4px;
        margin-block: -8px;
        margin-inline: -8px;
    }  
    nav p a{
        text-decoration:none;
        padding-block: 10px;
        padding-inline: 10px;
        color:rgb(0, 0, 0);
        margin-inline: -4px;
    }
    nav p{
        
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
        padding-inline: 10px;
        text-justify:inter-word;
        display: grid;
        grid-template-columns: repeat(4,1fr);
        text-align: center;
    }
    nav p a:hover{
        background: #f09ca6;
        padding-block: 20px;
        padding-inline: 10px;
        
    }
    

</style>

<header>
    <nav>
        <p>
            <a href="{{route('index')}}">Inicio</a>
            <a href="{{route('products.index')}}">Productos</a>
            <a href="{{route('clients.index')}}">Clientes</a>
            <a href="{{route('sales.index')}}">Ventas</a>
        </p>
    </nav>
</header>
<br>
<br>
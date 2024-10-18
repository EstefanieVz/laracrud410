<style>
    header{
        background: rgba(120, 75, 203, 0.8);
        padding-block: 4px;
        margin-block: -8px;
        margin-inline: -8px;
    }  
    nav p a{
        text-decoration:none;
        padding-block: 10px;
        padding-inline: 10px;
        color:rgb(49, 4, 97);
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
        background: rgb(128, 90, 198);
        padding-block: 20px;
        padding-inline: 10px;
        
    }
    

</style><style>
    header{
        background: rgba(120, 75, 203, 0.8);
        padding-block: 4px;
        margin-block: -8px;
        margin-inline: -8px;
    }  
    nav p a{
        text-decoration:none;
        padding-block: 10px;
        padding-inline: 10px;
        color:rgb(49, 4, 97);
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
        background: rgb(128, 90, 198);
        padding-block: 20px;
        padding-inline: 10px;
        
    }
    

</style>

<header>
    <nav>
        <p>
            <a href="{{route('index')}}">Inicio</a>
            <a href="{{route('products')}}">Productos</a>
            <a href="{{route('clients')}}">Clientes</a>
            <a href="{{route('sales')}}">Ventas</a>
        </p>
    </nav>
</header>
<br>
<br>
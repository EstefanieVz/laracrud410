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
<!--
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
-->
<!-- NAVBAR DE BOOSTRAP-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <i class="fa-solid fa-otter"></i>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('index')}}">Inicio</a>
              </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('products.index')}}">Productos</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Información
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('clients.index')}}">Clientes</a></li>
              <li><a class="dropdown-item" href="#">Direcciones</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('sales.index')}}">Ventas</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
@extends('layout.main_template')

@section('content')
<style>
.cuadro{ 
        display: grid;
        grid-template-columns: repeat(2,1fr);
        text-align: justify;
    }
    .centrar{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        padding-inline: 10px;
        text-justify:inter-word;
        text-align: justify;
        margin: 50px;
    }
    .textcentrar{
        text-align: center
    }
</style>
<h1 class="textcentrar">¡Bienvenidos a DULMEX, tu tienda de dulces mexicanos favorita!</h1>
<div class="cuadro">

    <div class="centrar">
        
        <p>En nuestro país, los dulces son una parte fundamental de nuestra cultura y tradición.
            Desde los clásicos alegrías y cocadas, hasta los deliciosos dulces de leche y frutas, 
            cada uno de nuestros productos es una explosión de sabor y color que te transportará a la infancia.
        </p>
        <p>
            En DULMEX, nos apasiona compartir con ustedes la riqueza y diversidad de los dulces mexicanos. 
            Nuestros productos son elaborados con amor y cuidado, utilizando solo los ingredientes más frescos y de alta calidad.
        </p>
        <p>
            Nuestra tienda es un lugar donde la tradición y la innovación se unen para crear experiencias únicas y deliciosas. 
            Desde nuestros clásicos dulces de leche y cajeta, hasta nuestras creaciones más innovadoras como los dulces de frutas 
            y especias, cada uno de nuestros productos es una muestra de la pasión y el amor que ponemos en todo lo que hacemos.
        </p>
        <p>
            ¿Estás listo para descubrir el mundo de los dulces mexicanos? 
            ¡Explora nuestra tienda y encuentra tus favoritos! Nuestros productos están disponibles para compra en línea, 
            y también puedes visitarnos en nuestra tienda física para probar nuestros deliciosos dulces.
        </p>
        <p>
            ¡Gracias por elegir DULMEX! Estamos emocionados de compartir nuestra pasión por los dulces mexicanos con ustedes."
        </p>
    </div>

    <div class="centrar">
        <img src="{{ asset('fondo/dulces.jpg') }}">
    </div>
   
</div>
@endsection
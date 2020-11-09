<?php    
$cuenta=1;
?>     

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Proceso inserccion</title>
  </head>

  <body>
    <!--inicio codigo menu-->
    <nav class="navbar navbar-expand navbar-white bg-dark topbar mb-4 static-top shadow">
    
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre Notrosos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contactos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Promociones</a>
          </li>
        </ul>
      </div>
    </nav>
    <!--final codigo menu-->
    <img src="https://www.economicarentaautos.com/img/galerias/hyundai-tucson.jpg" alt="">
    
    <h1>
      <center>
       <div class="card text-white bg-primary">
        
        <img class="card-img-top" src="holder.js/100px180/" alt="">
        <div class="card-body">
          
          <p class="card-text">Nuestra Flota</p>
        </div>

        <div>
          <form class="form-inline my-2 my-lg-0 float-right">
            <input class="form-control mr-sm-2" type="search" placeholder="Busca vehiculo" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Filtrar</button>
          </form>
          </div>
      </div>    
    </center>
    </h1>
<!--
    <form action="{{ route('clientes.crear') }}" method="POST">
       @csrf
        <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2">
        <input type="text" name="apellido" placeholder="Apellido" class="form-control mb-2">
        <button class="btn btn-primary btn-block" type="submit">insertar</button>
    </form>-->

<!--tablas de ejemplo-->

<div class="container">

@foreach ($cliente->chunk(4) as $separa) 

<div class="row">
  @foreach ($separa as $item) 
  <div class="col-sm-6 col-md-3">
    <div class="float-right">
      <div class="card">
      <img src="{{ $item->img}}" style="max-width:14rem; width:auto;height:auto;" alt="..."> <!--imagen de vehiculo-->
        
      <div class="caption">
        <h3> {{ $item->marca }} </h3> <!--nombre de Vehiculo-->

        <p class="card-text"> {{ $item->detalle }} </p><!--Caracteristica de vehiculo-->
        <p class="card-text"> {{ $item->modelo}} </p><!--precio de vehiculo-->

        <div class="float-right">
        <p><a href="{{route('test')}}" class="btn btn-danger" role="button" >
          Detalle</a>
        </p>
        </div>
        
      </div>

    </div>
    </div>
  </div>
  @endforeach
</div>
<br>
@endforeach
  <!--final del catalogo de datos-->
</div>

  <!-- primer codigo
  <div>
<table >
  
  <?php
  /*
    if ($cuenta>3) {
    echo "<tr>"; 
    }      */
  ?>    
    @foreach ($cliente as $item)  
        <tr>
           <td>
              <a href="{{route('test')}}"><img class="" src="{{ $item->img}}" style="width: 18rem;" alt=""></a>  
              

                
          </td> 
        </tr>  
        @endforeach
        
          <?php
          /*
          if ($cuenta>2) {
            echo "</tr>"; 
            $cuenta = 0;
          }
          $cuenta++;      */
        ?>
  

</table>

</div>
  
  
  
  
  -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


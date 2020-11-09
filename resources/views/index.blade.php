@extends('plantilla')

@section('seccion')


 <!--final codigo menu-->
 <!--<img src="https://www.economicarentaautos.com/img/galerias/hyundai-tucson.jpg"  
 width="1817" height="800" "alt="">-->

 <div class="d-flex justify-content-center">
 <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://images4.alphacoders.com/967/thumb-1920-96758.jpg" style="width:1000px; height:500px" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.alphacoders.com/147/thumb-1920-147481.jpg" style="width:1000px; height:500px" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images2.alphacoders.com/209/thumb-1920-209460.jpg" style="width:1000px; height:500px" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </div>

<div class="container-fluid bg-primary">

 
  <div class="page-header" >
    <center>
    <h1 style="color:white;"">NUESTRA FLOTA</h1>
   </center>
  </div>

  <div>    
    <form class="form-inline ml-3 float-left" method="GET" action="{{Route('buscar')}}">
      <input class="form-control form-control-navbar"  name="correo"  type="search" placeholder="Agregar correo" aria-label="Search">
      <!--<a href="{{Route('buscar')}}" class="btn btn-danger" role="button" type="submit">
        buscar reserva</a>-->
        <button class="btn btn-navbar bg-warning" type="submit">
          buscar
          </button>
    </form>
    </div>

</div>

    <div>
    <form class="form-inline ml-3 float-right">
      <input class="form-control form-control-navbar" name="search" type="search" placeholder="Busca vehiculo" aria-label="Search">
      <button class="btn btn-navbar bg-warning" type="submit">
      buscar
      </button>
    </form>
    </div>
</div>
<br>
<br>
<br>
<br>

<div class="container-fluid">

    @foreach ($cliente->chunk(4) as $separa) 

            <div class="row">
              @foreach ($separa as $item) 
              <div class="col-sm-6 col-md-3">
                <div class="float-right">
                  <div class="card border-left-dark">
               
                  <img src="{{ $item->img}}" width="100%" height="50%" alt="..."> <!--imagen de vehiculo-->
                    
                  <div class="caption">
                    <h1><strong> {{ $item->marca }} </strong></h1> <!--nombre de Vehiculo-->

                    <p class="card-text"> {{ $item->detalle }} </p><!--Caracteristica de vehiculo-->
                    <p class="card-text"> {{ $item->modelo}} </p><!--precio de vehiculo-->

                    <div class="float-right">

                
                    <p><a href="{{Route('test',['valor'=>$item->id])}}" class="btn btn-success"  name="obtener" role="button" >
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

                     
            

  </div>  





@endsection   


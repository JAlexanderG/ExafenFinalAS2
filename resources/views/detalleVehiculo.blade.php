@extends('plantilla')

@section('seccion')

@foreach($conteos as $conteoo)
  <?php
    $prueba = $conteoo->total;
                         
      if($prueba >= 1 ){
        ?>
        
        <div class="container">
  @foreach ($cadena->chunk(1) as $separa) 

          <div class="row">

            @foreach ($separa as $item) 
            
            <div class="col-lg-6">
              <br>
              <br>
              <div >
                <div class="card border-left-dark">
                
                @foreach($cadenaImagen as $imagen)
                <img src="{{ $imagen->img}}" width="425" height="250" alt="..."> <!--imagen de vehiculo-->
                @endforeach

                <div class="caption">
                  
                  <h1><strong> {{ $item->marca }} </strong></h1> <!--nombre de Vehiculo-->

                  <p class="card-text"> {{ $item->detalle }} </p><!--Caracteristica de vehiculo-->
                  <p class="card-text"> {{ $item->modelo}} </p><!--precio de vehiculo-->
                </div>
                <p><a href="{{Route('renta',['valor'=>$item->id])}}" class="btn btn-danger"  name="obtener" role="button" >
                  Reservar</a>
                </p>
              </div>
              </div>
            </div>
            @endforeach
          
            <div class="col-lg-6">
              <br>
              <br>
              <div >
               <div class="container-fluid">
                  @foreach($cadena as $item)
                        <div class="row">
                          <div class="col-sm-6" style="background-color:lavender;"><center><strong>Marca</strong></center></div>
                          <div class="col-sm-6" style="background-color:lavender;"><center>{{ $item->marca}}<center></div>
                        </div>
                          <div class="row">    
                            <div class="col-sm-6" style="background-color:lavenderblush;"><center><strong>Detalle</strong></center></div>
                            <div class="col-sm-6" style="background-color:lavenderblush;"><center>{{ $item->detalle}}</center></div>   
                          </div>
                            <div class="row">
                              <div class="col-sm-6" style="background-color:lavender;"><center><strong>Modelo</strong></center></div>
                              <div class="col-sm-6" style="background-color:lavender;"><center>{{ $item->modelo}}<center></div>
                            </div>
                              <div class="row">    
                                <div class="col-sm-6" style="background-color:lavenderblush;"><center><strong>Caracteristica</strong></center></div>
                                <div class="col-sm-6" style="background-color:lavenderblush;"><center>{{ $item->descripcion}}</center></div>   
                              </div>
                                <div class="row">
                                  <div class="col-sm-6" style="background-color:lavender;"><center><strong>Color</strong></center></div>
                                  <div class="col-sm-6" style="background-color:lavender;"><center>{{ $item->color}}<center></div>
                                </div>
                                  <div class="row">    
                                    <div class="col-sm-6" style="background-color:lavenderblush;"><center><strong>Transmision</strong></center></div>
                                    <div class="col-sm-6" style="background-color:lavenderblush;"><center>{{ $item->transmision}}</center></div>   
                                    </div>
                                      <div class="row">
                                        <div class="col-sm-6" style="background-color:lavender;"><center><strong>Pasajeros</strong></center></div>
                                        <div class="col-sm-6" style="background-color:lavender;"><center>{{ $item->pasajeros}}<center></div>
                                      </div>
                                        <div class="row">    
                                          <div class="col-sm-6" style="background-color:lavenderblush;"><center><strong>Precio (por dia)</strong></center></div>
                                          <div class="col-sm-6" style="background-color:lavenderblush;"><center>{{ $item->precio}}</center></div>   
              
                                      </div>
                                      
                                     </br>
                         <h5><strong>Reservado</strong></h5>    
                         </br>
                         @foreach($cadenaFecha as $fecha)
                         
                         <div class="row">
                           <p class="card-text">Del⠀</p>
                           <p class="card-text">{{ $fecha->fecha_entrega }}</p>
                           <p class="card-text">⠀al⠀</p>
                           <p class="card-text">{{ $fecha->fecha_devolucion }}</p>
                         </div>
                        @endforeach


                         
                                    
                                     
                                     
                  @endforeach
       
              </div><!--final del container -->

            </div> <!--final tabla de comlumnas-->
              
          </div><!--final de row-->
          <br>
          @endforeach
        
        
        <?php
      }else{?>
      
         <div class="container">
  @foreach ($cadenas->chunk(1) as $separa) 

          <div class="row">

            @foreach ($separa as $item) 
            
            <div class="col-lg-6">
              <br>
              <br>
              <div >
                <div class="card border-left-dark">
                
               
                <img src="{{ $item->img}}" width="425" height="250" alt="..."> <!--imagen de vehiculo-->
               

                <div class="caption">
                  
                  <h1><strong> {{ $item->marca }} </strong></h1> <!--nombre de Vehiculo-->

                  <p class="card-text"> {{ $item->detalle }} </p><!--Caracteristica de vehiculo-->
                  <p class="card-text"> {{ $item->modelo}} </p><!--precio de vehiculo-->
                </div>
                <p><a href="{{Route('renta',['valor'=>$item->id])}}" class="btn btn-danger"  name="obtener" role="button" >
                  Reservar</a>
                </p>
              </div>
              </div>
            </div>
            @endforeach
          
            <div class="col-lg-6">
              <br>
              <br>
              <div >
               <div class="container-fluid">
                  @foreach($cadenas as $item)
                        <div class="row">
                          <div class="col-sm-6" style="background-color:lavender;"><center><strong>Marca</strong></center></div>
                          <div class="col-sm-6" style="background-color:lavender;"><center>{{ $item->marca}}<center></div>
                        </div>
                          <div class="row">    
                            <div class="col-sm-6" style="background-color:lavenderblush;"><center><strong>Detalle</strong></center></div>
                            <div class="col-sm-6" style="background-color:lavenderblush;"><center>{{ $item->detalle}}</center></div>   
                          </div>
                            <div class="row">
                              <div class="col-sm-6" style="background-color:lavender;"><center><strong>Modelo</strong></center></div>
                              <div class="col-sm-6" style="background-color:lavender;"><center>{{ $item->modelo}}<center></div>
                            </div>
                              <div class="row">    
                                <div class="col-sm-6" style="background-color:lavenderblush;"><center><strong>Caracteristica</strong></center></div>
                                <div class="col-sm-6" style="background-color:lavenderblush;"><center>{{ $item->descripcion}}</center></div>   
                              </div>
                                <div class="row">
                                  <div class="col-sm-6" style="background-color:lavender;"><center><strong>Color</strong></center></div>
                                  <div class="col-sm-6" style="background-color:lavender;"><center>{{ $item->color}}<center></div>
                                </div>
                                  <div class="row">    
                                    <div class="col-sm-6" style="background-color:lavenderblush;"><center><strong>Transmision</strong></center></div>
                                    <div class="col-sm-6" style="background-color:lavenderblush;"><center>{{ $item->transmision}}</center></div>   
                                    </div>
                                      <div class="row">
                                        <div class="col-sm-6" style="background-color:lavender;"><center><strong>Pasajeros</strong></center></div>
                                        <div class="col-sm-6" style="background-color:lavender;"><center>{{ $item->pasajeros}}<center></div>
                                      </div>
                                        <div class="row">    
                                          <div class="col-sm-6" style="background-color:lavenderblush;"><center><strong>Precio (por dia)</strong></center></div>
                                          <div class="col-sm-6" style="background-color:lavenderblush;"><center>{{ $item->precio}}</center></div>   
              
                                      </div>
                                      
                                     </br>                       
                                    
                                     
                                     
                  @endforeach
       
              </div><!--final del container -->

            </div> <!--final tabla de comlumnas-->
              
          </div><!--final de row-->
          <br>
          @endforeach     


      <?php }
  ?>
                         
@endforeach





          
            <!--final del catalogo de datos-->
</div><!--final container-->
<br>
<br>
<br>
<br>
<p><span>***PRECIOS NO APLICAN EN TEMPORADA SEMANA SANTA, VACACIONES MEDIO AÑO Y DICIEMBRE, AÑO NUEVO </span></p>
<p><span>***EL PRECIO Y CONDICIONES VARIA DE 1-2 DIAS DE RENTA</span></p>
<p><span>***PRECIO APLICA UNICAMENTE RESERVACIONES EN LINEA</span></p>
<br>
<br>
<br>
<br>
<h5>REQUISITOS</h5>
<p><span>Tarjeta de credito con disponibilidad de Q8,000</span></p>
<p><span>Licencia de conducir vigente</span></p>
<p><span>Mayor de 25 años </span></p>
<p><span>DPI, licencia y tarjeta de credito original precente</span></p>
<br>
<br>
<br>
<br>
<h5>LA TARIFA INCLUYE </h5>
<p><span>Seguro Basico</span></p>
<p><span>IVA </span></p>
<p><span>Kilometraje libre de 2 dias en adelante por 1 dia unicamente 200 kilometros </span></p>
<p><span>1 conductor adicional</span></p>
<br>
<br>
<p><span>por 1 dia unicamente 200 kilometros</span></p>
<p><span>1 conductor adicional</span></p>
  <!--final del catalogo de datos-->




@endsection


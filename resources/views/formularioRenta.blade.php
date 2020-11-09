@extends('plantilla')

@section('seccion')


<font face="Tw Cen MT" size="5" color="black">
  <h1 align="center"><strong>RENTA DE VEHICULO</strong></h1>
 <h4 align="center">Ingrese los datos</h4>
</font>


<div class="container">
    
  
  
  <form action="/renta" method="POST" class="form-horizontal">
    {{ csrf_field() }}
    <div class="form-group">
      @foreach($cadena as $item)
        <div class="col-sm-10">
           <input type="text" value=" {{ $item->id}} " name="id" id="id" class="form-control" placeholder="Ingresar nombres" required readonly>
      </div>
      </br>
      <div class="form-group">
        <div class="col-sm-10">
           <input type="text" value=" {{ $item->marca}} " name="txt_marca" id="txt_marca" class="form-control" placeholder="Ingresar nombres" required readonly>
      </div>

      <div class="form-group">
      <label for="lbl_nombres" class="control-label col-sm-2">Precio por dia:</label>   
        <div class="col-sm-10">
           <input type="text" value=" {{ $item->precio}} " name="precio" id="precio" class="form-control" placeholder="Ingresar nombres" required readonly>
      </div>
      @endforeach
        <div class="form-group">
        <label for="lbl_nombres" class="control-label col-sm-2">Nombres:</label>
        <div class="col-sm-10">
           <input type="text"  name="nombres" id="nombres" class="form-control" placeholder="Ingresar nombres" required>
        </div>
      </div> 
      <div class="form-group">
        <label for="lbl_apellidos" class="control-label col-sm-2">Apellidos:</label>
        <div class="col-sm-10">
           <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Ingresar apellidos" required>
        </div>
      </div>  
      
      
       
      <div class="form-group">
        <label for="lbl_fn" class="control-label col-sm-2">Fecha nacimiento:</label>
        <div class="col-sm-10">
           <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" placeholder="Ingresar fecha" required>
        </div>
      </div>
      <div class="form-group">
        <label for="lbl_cui" class="control-label col-sm-2">DPI:</label>
        <div class="col-sm-10">
           <input type="text" name="dpi" id="dpi" class="form-control" placeholder="Ingresar CUI" required>
        </div>
      </div> 
      <div class="form-group">
        <label for="lbl_telefono" class="control-label col-sm-2">Telefono:</label>
        <div class="col-sm-10">
           <input type="number" name="telefono" id="telefono" class="form-control" placeholder="Ingresar telefono" required>
        </div>
      </div>
      <div class="form-group">
        <label for="lbl_telefono" class="control-label col-sm-2">Correo electronico:</label>
        <div class="col-sm-10">
           <input type="text" name="email" id="email" class="form-control" placeholder="Ingresar telefono" required>
        </div>
      </div>
      <div class="form-group">
        <label for="lbl_cui" class="control-label col-sm-2">Nit:</label>
        <div class="col-sm-10">
           <input type="text" name="nit" id="nit" class="form-control" placeholder="Ingresar CUI" required>
        </div>
      </div> 
      <div class="form-group">
        <label for="lbl_direccion" class="control-label col-sm-2">Direccion:</label>
        <div class="col-sm-10">
           <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingresar direccion" required>
        </div>
      </div>
      <div class="form-group">
        <label for="lbl_telefono" class="control-label col-sm-2">Numero de licencia:</label>
        <div class="col-sm-10">
           <input type="number" name="no_licencia" id="no_licencia" class="form-control" placeholder="Ingresar telefono" required>
        </div>
      </div>
      <div class="form-group">
        <label for="lbl_fn" class="control-label col-sm-2">Fecha entrega:</label>
        <div class="col-sm-10">
           <input type="date" name="fecha_entrega" id="fecha_entrega" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <label for="lbl_fn" class="control-label col-sm-2">Fecha devolucion:</label>
        <div class="col-sm-10">
           <input type="date" name="fecha_devolucion" id="fecha_devolucion" class="form-control" required>
        </div>
      </div>

      <div class="form-group">
        <label for="lbl_direccion" class="control-label col-sm-2">Tipo de pago:</label>
        <div class="col-sm-10">
           <input type="text" name="pago" id="pago" class="form-control" placeholder="Ingresar direccion" required>
        </div>
      </div>   

      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary active">Ingresar</button>
        </div>
     </div> 
  </form>

</div>
<div>
  
  @foreach($cadena as $item)
  <img src="{{ $item->img}}" width="425" height="250" alt="..."> <!--imagen de vehiculo-->
  @endforeach
</div>


@endsection 
@extends('plantilla')

@section('seccion')

<br>
<br>
<br>

<center>
  <h2>
   
       <font face="Tw Cen MT" size="8" color="black">
        <h1 align="center"><strong>Detalles de reserva</strong></h1>
        </font>
        
    
  </h2>
  </center>

<br>
<div class="container">

@foreach ($cadena as $item)

<form action="{{Route('editar',['valor4'=>$item->no_reserva])}}" method="post" class="form-horizontal">
    {{ csrf_field() }}
    @method('PATCH')
       

      <div class="form-group">
        
        <div class="col-sm-10">
           <input type="text"  name="precio" id="precio" class="form-control" value={{ $item->precio}} readonly>
        </div>
      </div>

      <div class="form-group">
        
        <div class="col-sm-10">
           <input type="text"  name="id" id="id" class="form-control" value={{ $item->id}} readonly>
        </div>
      </div>

      <div class="form-group">
        <label for="lbl_nombres" class="control-label col-sm-2"><strong>Nombres:</strong></label>
        <div class="col-sm-10">
           <input type="text"  name="nombres" id="nombres" class="form-control" value={{ $item->nombres}}>
        </div>
      </div> 
      <div class="form-group">
        <label for="lbl_apellidos" class="control-label col-sm-2"><strong>Apellidos:</strong></label>
        <div class="col-sm-10">
           <input type="text" name="apellidos" id="apellidos" class="form-control" value={{ $item->apellidos}}>
        </div>
      </div> 
     <div class="form-group">
        <label for="lbl_fn" class="control-label col-sm-2"><strong>Fecha nacimiento:</strong></label>
        <div class="col-sm-10">
           <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value={{$item->fecha_nacimiento}}>
        </div>
      </div>
      <div class="form-group">
    
      
      <label for="lbl_cui" class="control-label col-sm-2"><strong>DPI</strong>:</label>
        <div class="col-sm-10">
           <input type="text" name="dpi" id="dpi" class="form-control" value={{$item->dpi}} required>
        </div>
      </div> 
      <div class="form-group">
        <label for="lbl_telefono" class="control-label col-sm-2"><strong>Telefono:</strong></label>
        <div class="col-sm-10">
           <input type="number" name="telefono" id="telefono" class="form-control" value={{$item->telefono}} required>
        </div>
      </div>
      <div class="form-group">
        <label for="lbl_telefono" class="control-label col-sm-2"><strong>Correo electronico</strong>:</label>
        <div class="col-sm-10">
           <input type="text" name="email" id="email" class="form-control" value={{$item->email}} required>
        </div>
      </div>
      <div class="form-group">
        <label for="lbl_cui" class="control-label col-sm-2"><strong>Nit</strong>:</label>
        <div class="col-sm-10">
           <input type="text" name="nit" id="nit" class="form-control" value={{$item->nit}} required>
        </div>
      </div> 
      <div class="form-group">
        <label for="lbl_direccion" class="control-label col-sm-2"><strong>Direccion:</strong></label>
        <div class="col-sm-10">
           <input type="text" name="direccion" id="direccion" class="form-control" value={{$item->direccion}} required>
        </div>
      </div>
      <div class="form-group">
        <label for="lbl_telefono" class="control-label col-sm-2"><strong>Numero de licencia:</strong></label>
        <div class="col-sm-10">
           <input type="number" name="no_licencia" id="no_licencia" class="form-control" value={{$item->no_licencia}} required>
        </div>
      </div>
      <div class="form-group">
        <label for="lbl_fn" class="control-label col-sm-2"><strong>Fecha entrega:</strong></label>
        <div class="col-sm-10">
           <input type="date" name="fecha_entrega" id="fecha_entrega" class="form-control" value={{$item->fecha_entrega}} required>
        </div>
      </div>
      <div class="form-group">
        <label for="lbl_fn" class="control-label col-sm-2"><strong>Fecha devolucion:</strong></label>
        <div class="col-sm-10">
           <input type="date" name="fecha_devolucion" id="fecha_devolucion" class="form-control" value={{$item->fecha_devolucion}} required>
        </div>
      </div>

      <div class="form-group">
        <label for="lbl_direccion" class="control-label col-sm-2"><strong>Tipo de pago:</strong></label>
        <div class="col-sm-10">
           <input type="text" name="pago" id="pago" class="form-control" value={{$item->pago}} required>
        </div>
       </div>  

       <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">

        <button type="submit" class="btn btn-info active">Confirmar</button>

        </div>
     </div>  
      
</form>  
      @endforeach

</div>

@endsection   

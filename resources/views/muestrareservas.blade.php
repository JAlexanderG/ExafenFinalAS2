@extends('plantilla')

@section('seccion')
<br>
<br>
<br>


<div class="container-fluid">

  <center>
  <h2>
    @if($emailb)
       <font face="verdana" size="5" color="#A50021">
        <h2 align="center">Lista de reservas para:</h2>
        </font>
        <div class="alert alert-primary" role="alert">
        <font face="Tw Cen MT" size="5" color="blue">
           <h4>{{ $emailb}}</h4>
        </font>
        </div>
    @endif
  </h2>
  </center>
  <br>
  <br>
  <br>
  
<div class="container">
       <table class="table table-bordered">
          <thead>
            <tr class="table-danger">
                      
              <th><h5>NO. RESERVA</h5></th>
              <th><h5>NOMBRES</h5></th>
              <th><h5>APELLIDOS</h5></th>
              <th><h5>ACCION</h5></th>     
           </tr>
         </thead>
         <tbody id="tbl_productos">
          @foreach($correo->chunk(1) as $separa)
            <tr>
           
              @foreach ($separa as $item)

              <td>{{ $item->no_reserva}}</td>
              <td>{{ $item->nombres}}</td>
              <td>{{ $item->apellidos}}</td>
              <td>   
                  <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#myModal">Detalle</button>
                  <a href="{{Route('detalle',['valor3'=>$item->no_reserva])}}" class="btn btn-warning "  name="obtener" role="button" >Modificar</a>                 
                  
              </td>
              @endforeach 
           
            </tr> 
             @endforeach  
         </tbody>
       </table>
  </div>
</div>




<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Datos de reserva</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">

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

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
     
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        
      </div>
     
    </div>
  </div>



@endsection  
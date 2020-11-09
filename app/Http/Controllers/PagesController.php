<?php

namespace App\Http\Controllers;
use App\renta;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    //
    const Agregar=3;
    
    public function inicio(Request $request){
        
      if($request){
        $busqueda = trim($request -> get('search') );  
        $cliente = DB::table('vehiculos')
        ->join('tipo_vehiculos','vehiculos.id_tipo_vehiculo','=','tipo_vehiculos.id_tipo_vehiculo')
        ->select('vehiculos.*','tipo_vehiculos.descripcion')
        ->where('marca','LIKE','%'.$busqueda.'%')->orderBy('id','asc')
      ->get();

        return view('index',['cliente'=>$cliente,'search'=>$busqueda]);

     }
             
}



public function buscar( Request $request){
  //echo Form::text('username');
  //$respuesta = trim($dato->get('correo'));
  //dd($respuesta); 
    $respuesta = trim($request -> get('correo') );            
    if($respuesta){
    $reserva = Renta::where('email','LIKE','%'.$respuesta.'%')->orderBy('id','asc')->get();
    //$reserva=DB::table('rentas')
    //->where('email','LIKE','%'.$respuesta)->get();
  
    return view('muestrareservas',['correo'=>$reserva,'emailb'=>$respuesta]);
    }else{

      return('No Cuenta con reservas');
    }
}

public function test($id_vehiculo){

  if($id_vehiculo){
    $busqueda = $id_vehiculo;

  $clientes = DB::table('vehiculos')
  ->where('id','LIKE','%'.$busqueda.'%')
  ->join('tipo_vehiculos','vehiculos.id_tipo_vehiculo','=','tipo_vehiculos.id_tipo_vehiculo')
  ->select('vehiculos.*','tipo_vehiculos.descripcion','tipo_vehiculos.precio')
  ->get();
    

  $cliente = DB::table('vehiculos')
  ->where('vehiculos.id','LIKE','%'.$busqueda.'%')
  ->join('rentas','vehiculos.id','=','rentas.id')
  ->join('tipo_vehiculos','vehiculos.id_tipo_vehiculo','=','tipo_vehiculos.id_tipo_vehiculo')
  ->select('vehiculos.id', 'vehiculos.marca','vehiculos.detalle','vehiculos.modelo', 'tipo_vehiculos.descripcion','vehiculos.color','vehiculos.transmision','vehiculos.pasajeros', 'tipo_vehiculos.precio',DB::raw('MAX(rentas.no_reserva) as mayor'))
  ->groupBy('vehiculos.id', 'vehiculos.marca','vehiculos.detalle','vehiculos.modelo', 'tipo_vehiculos.descripcion','vehiculos.color','vehiculos.transmision','vehiculos.pasajeros', 'tipo_vehiculos.precio')
  ->get();

  $imagen = DB::table('vehiculos')
  ->where('vehiculos.id','LIKE','%'.$busqueda.'%')
  ->select('vehiculos.img')
  ->get();

  $fecha = DB::table('rentas')
      ->where('rentas.id','LIKE','%'.$busqueda.'%')
      ->select('rentas.fecha_entrega','rentas.fecha_devolucion')
      ->get();

      $conteo = DB::table('rentas')
    ->where('rentas.id','LIKE','%'.$busqueda.'%')
    ->select(DB::raw('count(*) as total'))
    ->groupBy()
    ->get();


      return view('detalleVehiculo',['cadena'=>$cliente,'cadenaImagen'=>$imagen,'cadenaFecha'=>$fecha,'conteos'=>$conteo,'cadenas'=>$clientes]);
    
    }else{
      $busqueda = $id_vehiculo;
      
      $cliente = DB::table('vehiculos')
     ->where('vehiculos.id','LIKE','%'.$busqueda.'%')
     ->join('tipo_vehiculos','vehiculos.id_tipo_vehiculo','=','tipo_vehiculos.id_tipo_vehiculo')
     ->select('vehiculos.id', 'vehiculos.marca','vehiculos.detalle','vehiculos.modelo', 'tipo_vehiculos.descripcion','vehiculos.color','vehiculos.transmision','vehiculos.pasajeros', 'tipo_vehiculos.precio')
     ->get();

     $imagen = DB::table('vehiculos')
  ->where('vehiculos.id','LIKE','%'.$busqueda.'%')
  ->select('vehiculos.img')
  ->get();

  $fecha = DB::table('rentas')
      ->where('rentas.id','LIKE','%'.$busqueda.'%')
      ->select('rentas.fecha_entrega','rentas.fecha_devolucion')
      ->get();



      return view('detalleVehiculo',['cadena'=>$cliente,'cadenaImagen'=>$imagen,'cadenaFecha'=>$fecha]);

    }
}


    public function renta($id){
            
      $id_vehiculo = $id;

      $cliente = DB::table('vehiculos')
     ->where('id','LIKE','%'.$id_vehiculo.'%')
         ->join('tipo_vehiculos','vehiculos.id_tipo_vehiculo','=','tipo_vehiculos.id_tipo_vehiculo')
         ->select('vehiculos.*','tipo_vehiculos.descripcion','tipo_vehiculos.precio')
         ->get();

        

         return view('formularioRenta',['cadena'=>$cliente]);           
          
    }

    public function rentaCrear(Request $request){       
     

        app\renta::create($request->all());
       return('Automovil rentado');
       
  }

  public function detalleRenta($no_reserva){
    $reserva = $no_reserva;

    $reservita = DB::table('rentas')
    ->where('no_reserva','LIKE','%'.$reserva.'%')
        ->select('rentas.*')
        ->get();

        return view('detalleReserva',['cadena'=>$reservita]);

  }


  public function editar(Request $request, $no_reserva){
    
     $datosReserva= request()->except(['_token','_method']);

       DB::table('rentas')
     ->where('no_reserva','=',$no_reserva)
     ->update($datosReserva);

     $respuesta = $request->email;

     
     $reserva = Renta::where('email','LIKE','%'.$request->email.'%')->orderBy('id','asc')->get();
    
   
     return view('muestrareservas',['correo'=>$reserva,'emailb'=>$respuesta]);

  }

 
}

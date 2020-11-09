<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class renta extends Model
{

   protected $fillable = ['id','nombres','apellidos','fecha_nacimiento',
                          'dpi','telefono','email','nit','direccion','no_licencia',
                          'fecha_entrega','fecha_devolucion','pago','precio'];

    //
}

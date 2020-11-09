<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentas', function (Blueprint $table) {
            $table->bigIncrements('no_reserva');
            $table->integer('id');  //Hace referencia al id del vehiculo
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fecha_nacimiento');
            $table->string('dpi');            
            $table->integer('telefono');
            $table->string('email');
            $table->string('nit');
            $table->string('direccion');
            $table->integer('no_licencia');
            $table->date('fecha_entrega');
            $table->date('fecha_devolucion');
            $table->string('pago');
            $table->integer('precio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rentas');
    }
}

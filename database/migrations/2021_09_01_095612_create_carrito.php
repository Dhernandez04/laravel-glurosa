<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito', function (Blueprint $table) {
            $table->id();
            $table->string('folio',40);
           
            $table->unsignedBigInteger('id_producto');
            $table->string('nombre',90);
            $table->unsignedBigInteger('cantidad');
            $table->decimal('precio',$precision = 8, $scale = 2);
            $table->decimal('subtotal',$precision = 8, $scale = 2);

         
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
        Schema::dropIfExists('carrito');
    }
}

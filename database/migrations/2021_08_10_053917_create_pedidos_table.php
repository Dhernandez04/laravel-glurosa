<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('folio',40);
            $table->integer('total');
            $table->string('departamento',50);
            $table->string('municipio',50);
            $table->string('direccion',100);
            $table->string('comentario')->nullable();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_pago');
            $table->timestamps();
            $table->foreign('id_pago')->references('id')->on('metodo_pagos');
            $table->foreign('id_usuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}

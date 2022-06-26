<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_ordenpedido');
            $table->unsignedBigInteger('id_tipo');
            $table->date('fecha');
            $table->integer('estado');
            $table->timestamps();
            $table->softDeletes();
	        $table->foreign('id_ordenpedido')->on('orden_de_pedidos')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_tipo')->on('tipo_de_pagos')->references('id')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
};

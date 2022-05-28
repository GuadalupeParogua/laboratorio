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
        Schema::create('materia_primas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_unidadMedida')->nullable();
            $table->unsignedBigInteger('id_area')->nullable();
            $table->unsignedBigInteger('id_categoria')->nullable();
            $table->string('nombre')->nullable();
            $table->float('p_venta')->nullable();
            //$table->string('estado');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_unidadMedida')->on('unidad_de_medidas')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_area')->on('area_almacenamientos')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_categoria')->on('categorias')->references('id')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materia_primas');
    }
};

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
        Schema::create('nota_de_compras', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_encargado');
            $table->unsignedBigInteger('id_proveedor');
            $table->dateTime('fechaCompra');
            $table->float('total');
           // $table->string('estado');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_encargado')->on('encargados')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_proveedor')->on('proveedors')->references('id')->onDelete('cascade')->onUpdate('cascade');
        

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nota_de_compras');
    }
};

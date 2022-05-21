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
        Schema::create('detalle_de_ventas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_orden');
            $table->unsignedBigInteger('id_prodfinal');
            $table->integer('cantidad');
            $table->float('total');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_orden')->on('orden_de_pedidos')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_prodfinal')->on('producto_finals')->references('id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_de_ventas');
    }
};

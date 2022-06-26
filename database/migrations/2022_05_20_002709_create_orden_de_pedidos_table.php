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
        Schema::create('orden_de_pedidos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_odontologo');
            $table->unsignedBigInteger('id_encargado');
         
            $table->text('detalle');
            $table->date('fechaPedido')->nullable();
            $table->date('fechaEntrega')->nullable();
            $table->integer('estado')->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_odontologo')->on('odontologos')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_encargado')->on('encargados')->references('id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('orden_de_pedidos');
    }
};

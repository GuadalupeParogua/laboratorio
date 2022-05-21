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
        Schema::create('detalle_de_compras', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_notacompra');
            $table->unsignedBigInteger('id_materiaPrima');
            $table->integer('cantidad');
            $table->float('precio_unit');
            $table->float('total');     
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_notacompra')->on('nota_de_compras')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_materiaprima')->on('materia_primas')->references('id')->onDelete('cascade')->onUpdate('cascade');
                  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_de_compras');
    }
};

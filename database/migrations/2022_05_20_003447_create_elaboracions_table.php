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
        Schema::create('elaboracions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_prodFinal');
            $table->unsignedBigInteger('id_lote');
            $table->integer('cantidad');
            $table->float('total');
            $table->date('f_elaboracion');
            //$table->string('estado');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_prodFinal')->on('producto_finals')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_lote')->on('lotes')->references('id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elaboracions');
    }
};

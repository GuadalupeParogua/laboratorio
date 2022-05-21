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
        Schema::create('producto_finals', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_categoria');
            $table->string('nombre');
            $table->string('descripcion');
            $table->float('precio');
            //$table->string('estado');
            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('producto_finals');
    }
};

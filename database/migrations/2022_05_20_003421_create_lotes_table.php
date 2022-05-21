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
        Schema::create('lotes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_materiaprima');
            $table->date('f_vencimiento');
            $table->string('cantidad');
            //$table->string('estado');

            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('lotes');
    }
};

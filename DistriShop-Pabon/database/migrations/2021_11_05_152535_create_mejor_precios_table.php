<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMejorPreciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mejor_precios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('code_producto')->references('cod_producto')->on('existencias');
            $table->string('descripcion');
            $table->timestamps();

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mejor_precios');
    }
}

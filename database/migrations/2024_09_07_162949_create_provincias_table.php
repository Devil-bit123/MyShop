<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvinciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provincias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_provincia');
            $table->string('capital_provincia');
            $table->text('descripcion_provincia');
            $table->string('poblacion_provincia');
            $table->string('superficie_provincia');
            $table->string('latitud_provincia');
            $table->string('longitud_provincia');
            $table->unsignedBigInteger('id_region');
            $table->foreign('id_region')->references('id')->on('region')->onDelete('cascade');
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
        Schema::dropIfExists('provincias');
    }
}

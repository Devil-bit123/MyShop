<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('cedula')->unique();
            $table->string('provincia');
            $table->date('fecha_nacimiento');
            $table->string('email')->unique();
            $table->text('observaciones')->nullable();
            $table->string('fotografia')->nullable();
            // Datos laborales
            $table->date('fecha_ingreso');
            $table->string('cargo');
            $table->string('departamento');
            $table->string('provincia_laboral');
            $table->decimal('sueldo', 10, 2);
            $table->boolean('jornada_parcial')->default(false);
            $table->text('observaciones_laborales')->nullable();
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
        Schema::dropIfExists('users');
    }
}

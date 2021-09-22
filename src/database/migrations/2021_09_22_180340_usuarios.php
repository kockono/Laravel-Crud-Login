<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->date('fecha_de_nacimiento');
            $table->string('sexo');
            $table->string('estado');
            $table->string('calle');
            $table->integer('numero_de_casa');
            $table->integer('numero_interior')->nulleable();
            $table->string('colonia');
            $table->timestamps();
        });
    }

    public function down()
    {
        //
        Schema::dropIfExists('usuarios');
    }
}

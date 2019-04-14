<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Basic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('type');
            $table->timestamps();
        });
        Schema::create('curriculums',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('direction');
            $table->timestamps();
            $table->integer('usuarios_id');
            

            $table->foreign('usuarios_id')->references('id')->on('usuarios');
        });
        Schema::create('empresas',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('web_page');
            $table->string('description');
            $table->timestamps();
            $table->integer('usuarios_id');

            $table->foreign('usuarios_id')->references('id')->on('usuarios');
        });
        Schema::create('cargos',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('areas',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('vacantes',function(Blueprint $table){
            $table->increments('id');
            $table->integer('salary');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
            $table->integer('empresas_id');

            $table->foreign('empresas_id')->references('id')->on('empresas');
        });
        Schema::create('vacantes_cargos',function(Blueprint $table){
            $table->increments('id');
            $table->integer('cargos_id');
            $table->integer('vacantes_id');
            $table->timestamps();
        });
        Schema::create('vacantes_areas',function(Blueprint $table){
            $table->increments('id');
            $table->integer('areas_id');
            $table->integer('vacantes_id');
            $table->timestamps();
        });


        Schema::create('postulaciones',function(Blueprint $table){
            $table->increments('id');
            $table->integer('usuarios_id');
            $table->integer('vacantes_id');
            $table->string('responce')->nullable();
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
        Schema::dropIfExists('curriculums');
        Schema::dropIfExists('vacantes_cargos');
        Schema::dropIfExists('vacantes_areas');
        Schema::dropIfExists('cargos');
        Schema::dropIfExists('areas');
        Schema::dropIfExists('vacantes');
        Schema::dropIfExists('postulaciones');
        Schema::dropIfExists('empresas');
        Schema::dropIfExists('usuarios');
    }
}

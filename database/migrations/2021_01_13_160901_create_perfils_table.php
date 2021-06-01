<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfils', function (Blueprint $table) { 
            $table->id();
            $table->string('nombre');
            $table->integer('primer_inicio');
            $table->integer('user_id');
            $table->string('fecha_nac');
            $table->string('empresa');
            $table->string('num_iva');
            $table->string('direccion');
            $table->string('dir_complemen');
            $table->string('cp');
            $table->string('ciudad');
            $table->string('pais');
            $table->string('logo');
            $table->string('img');
            $table->string('tel');
            $table->string('id_fiscal');
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
        Schema::dropIfExists('perfils');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('productos', function (Blueprint $table) {
             $table->id();
            $table->string('nombre');
            $table->string('ref_interna');
            $table->string('descripcion_breve');
            $table->string('descripcion');
            $table->string('cate_principal');
            $table->string('subcate');
            $table->string('tipo');
            $table->string('vinificacion');
            $table->string('cert');
            $table->string('uva');
            $table->string('dulzura');
            $table->string('envejecimiento');
            $table->string('graduacion');
            $table->string('anada');
            $table->string('formato');
            $table->string('estilo');
            $table->string('productor');
            $table->string('marca');
            $table->string('color');
            $table->string('sabor');
            $table->string('extra');
            $table->string('caracteristica');
            $table->string('stock');
            $table->string('minimo');
            $table->string('texto_s_stock');
            $table->string('precio');
            $table->string('tasa');
            $table->string('precio_imp');
            $table->string('peso');
            $table->string('transportista');
            $table->string('tags');
            $table->string('region');
            $table->string('pais');
            $table->string('do');
            $table->string('meta_titulo');
            $table->string('meta_descripcion');
            $table->string('user_id');
            $table->string('aprobado');
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
        Schema::dropIfExists('productos');
    }
}

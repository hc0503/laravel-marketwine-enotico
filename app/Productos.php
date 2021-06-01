<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'Productos';
protected $fillable = [ 'color', 'sabor', 'extra', 'user_id', 'nombre', 'ref_interna', 'descripcion_breve', 'descripcion', 'cate_principal', 'subcate', 'tipo', 'vinificacion', 'cert', 'uva', 'dulzura', 'multiplo', 'envejecimiento', 'envase', 'graduacion', 'anada', 'formato', 'estilo', 'productor', 'marca', 'caracteristica', 'stock', 'minimo', 'texto_s_stock', 'precio', 'tasa', 'precio_imp', 'peso', 'transportista', 'tags', 'region', 'pais', 'do', 'meta_titulo', 'meta_descripcion', 'created_at', 'updated_at'];
protected $guarded = ['id'];
}

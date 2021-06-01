<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImgProducto extends Model
{
    protected $table = 'Img_Productos';
protected $fillable = [ 'ruta', 'subtitulo', 'producto_id', 'created_at', 'updated_at'];
protected $guarded = ['id'];
}

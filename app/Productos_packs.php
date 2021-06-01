<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos_packs extends Model
{
     protected $table = 'productos_packs';
protected $fillable = [ 'id_pack', 'id_producto', 'created_at', 'updated_at'];
protected $guarded = ['id'];
}

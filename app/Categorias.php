<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
      protected $table = 'Categorias';
protected $fillable = [ 'nombre', 'img', 'created_at', 'updated_at'];
protected $guarded = ['id'];
}

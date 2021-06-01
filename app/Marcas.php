<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    protected $table = 'marcas';
protected $fillable = [ 'nombre','user_id', 'img', 'created_at', 'updated_at'];
protected $guarded = ['id'];
}

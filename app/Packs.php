<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packs extends Model
{
     protected $table = 'packs';
protected $fillable = [ 'nombre', 'precio', 'user_id', 'created_at', 'updated_at'];
protected $guarded = ['id'];
}

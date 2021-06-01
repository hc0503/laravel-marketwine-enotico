<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcate extends Model
{
    protected $table = 'Subcate';
protected $fillable = [ 'cate_id', 'nombre', 'created_at', 'updated_at'];
protected $guarded = ['id'];
}

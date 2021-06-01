<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturacion extends Model
{
     protected $table = 'Facturacion';
protected $fillable = [ 'id_user', 'direccion', 'ciudad', 'cp', 'pais', 'created_at', 'updated_at'];
protected $guarded = ['id'];
}

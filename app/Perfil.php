<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
   protected $table = 'perfils';
protected $fillable = [ 'nombre','user_id', 'fecha_nac', 'empresa', 'num_iva', 'direccion', 'dir_complemen', 'cp', 'ciudad', 'pais', 'tel', 'id_fiscal', 'logo', 'img', 'created_at', 'updated_at'];
protected $guarded = ['id'];
}

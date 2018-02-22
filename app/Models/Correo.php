<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Correo extends Model
{
   protected $table = 'correos';

   protected $fillable = 
	 ['correo',
	  'fecha_creacion',
	  'bol_eliminado'];
}

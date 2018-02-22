<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Carrusel;

class Carrusel extends Model
{
    protected $table = 'carrusel';

       public function equipo()
    {
        return $this->belongsTo(Producto::class,'idequipo','id');
    }
}

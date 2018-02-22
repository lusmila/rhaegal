<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class Catalogo extends Model
{
    protected $table = 'series';

       public function serie()
    {
        return $this->belongsTo(Producto::class,'idproducto','id');
    }
}

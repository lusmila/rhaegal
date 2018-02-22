<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class Producto extends Model
{
    protected $table = 'productos';

        public function serie()
    {
        return $this->hasMany(Producto::class,'idproducto','id');
    }

}

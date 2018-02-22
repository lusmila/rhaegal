<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contador extends Model
{
    protected $table = 'contador';

    protected $fillable = 
	 ['cantidad',
	  'fecha',
	  'ip'];
}

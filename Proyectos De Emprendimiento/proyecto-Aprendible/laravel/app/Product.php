<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    	protected $fillable = [
    	'name', 'short', 'body', //campos que tiene identificados en la base de datos
    ];
}

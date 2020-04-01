<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model {

    public $timestamps = false;

    protected $fillable = [
         'name', 'price', 'image'
    ];    

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seller extends Model
{ 
    use HasFactory;
    function productData(){
        return $this->hasOne('App\Models\product');
    }
    function productManyData(){
        return $this->hasMany('App\Models\product');
    }
}

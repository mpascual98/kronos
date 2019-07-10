<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use softDeletes;
    public $guarded = [];


public function users(){
  return $this->belongsTo('\App\User', 'user_id');
}
public function categories(){
  return $this->belongsToMany('\App\Category', 'categories_product', 'product_id', 'categories_id');
}
}

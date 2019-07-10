<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
  use softDeletes;
  public $guarded = [];

public function products(){
return $this->belongsToMany('\App\Product', 'categories_product', 'categories_id', 'product_id');
}
}

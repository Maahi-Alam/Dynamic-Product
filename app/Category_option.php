<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_option extends Model
{
    //

    protected $fillable = ['product_id','category_id','name'];

    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

}

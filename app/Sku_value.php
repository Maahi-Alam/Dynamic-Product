<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sku_value extends Model
{
    //

    protected $fillable = ['product_id','category_id','category_option_id','sku_id'];

    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function category_option(){
        return $this->belongsTo('App\Category_option');
    }

    public function sku(){
        return $this->belongsTo('App\Sku');
    }
}

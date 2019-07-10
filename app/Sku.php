<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sku extends Model
{
    //

    protected $fillable = ['product_id','sku','price'];

    public function product(){
        return $this->belongsTo('App\Product');
    }
}

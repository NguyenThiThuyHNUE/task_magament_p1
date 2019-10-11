<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=['_method'];

    public function bills(){
        return $this-> belongsToMany('App\Bill','bill_product');
    }
}

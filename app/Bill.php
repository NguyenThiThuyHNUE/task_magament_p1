<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Bill extends Model
{
    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function products(){
        return $this-> belongsToMany('App\Product','bill_product');
    }
}

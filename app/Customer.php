<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function bills(){
        return $this->hasMany('App\Bill');
    }

    public function feedbacks(){
        return $this->hasMany('App\Feedback');
    }
}

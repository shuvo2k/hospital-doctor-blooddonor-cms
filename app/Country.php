<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //cities
    public function cities(){
        return $this->hasMany('App\City');
    }
}

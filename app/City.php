<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //country
    public function country(){
        return $this->belongsTo('App\Country');
    }

    //states
    public function states(){
        return $this->hasMany('App\State');
    }
}

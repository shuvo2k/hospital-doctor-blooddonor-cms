<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //city
    public function city(){
        return $this->belongsTo('App\City');
    }
}

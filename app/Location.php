<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function detail(){
        return $this->belongsTo('App\Detail');
    }
}

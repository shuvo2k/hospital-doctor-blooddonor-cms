<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function detail(){
        return $this->belongsTo('App\Detail');
    }
}

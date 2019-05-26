<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Detail;

class Description extends Model
{
    public function detail(){
        return $this->belongsTo('App\Detail');
    }
}

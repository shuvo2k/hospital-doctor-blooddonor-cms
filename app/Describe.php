<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Describe extends Model
{
    public function describ(){
        return $this->belongsTo('App\Detail');
    }
}

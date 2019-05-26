<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TermsCondition extends Model
{
    public function detail(){
        return $this->belongsTo('App\Detail');
    }
}

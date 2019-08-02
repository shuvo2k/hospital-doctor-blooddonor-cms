<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodPost extends Model
{
      public function user(){
        return $this->belongsTo('App\User');
      }

    
}

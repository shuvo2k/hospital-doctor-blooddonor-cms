<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    public function detail()
    {
        return $this->hasOne('App\Detail');

    }

    //relation with blood donor
    public function blood_posts(){
      return $this->hasMany('App\BloodPost');
    }

    public function donor_messages(){
      return $this->hasMany('App\DonorMessage');
    }
}

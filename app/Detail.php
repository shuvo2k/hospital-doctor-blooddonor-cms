<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    //schedule
    public function schedules(){

        return $this->hasMany('App\Schedule');
    }

    //blog
    public function blogposts(){
        return $this->hasMany('App\BlogPost');
    }

    //description
    public function description(){
        return $this->hasOne('App\Description');
    }

    //image gallery
    public function galleries(){
        return $this->hasMany('App\GalleryImage');
    }

    //patient reviews
    public function renviews(){
        return $this->hasMany('App\Review');
    }

    //features
    public function features(){
        return $this->hasMany('App\Feature');
    }

    //services
    public function services(){
        return $this->hasMany('App\Service');
    }

    //general information
    public function generalinfos(){
        return $this->hasOne('App\GeneralInfo');
    }

    //nearest hotel
    public function hotels(){
        return $this->hasMany('App\NearestHotel');
    }

    //terms and condition
    public function term_conditions(){
        return $this->hasOne('App\TermConditon');
    }

    //maps and location
    public function location(){
        return $this->hasOne('App\Location');
    }
}


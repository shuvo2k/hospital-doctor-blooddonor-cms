<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //blog
    public function sub_categories(){
        return $this->hasMany('App\SubCategory');
    }

    //blog
    public function blog_posts(){
        return $this->hasMany('App\BlogPost');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //blog
    public function subcategories(){
        return $this->hasMany('App\SubCategory');
    }

    //blog
    public function blogposts(){
        return $this->hasMany('App\BlogPost');
    }
}

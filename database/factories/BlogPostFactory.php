<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Detail;
use App\BlogPost;
use App\Category;
use App\SubCategory;

$factory->define(BlogPost::class, function (Faker $faker) {
    $title = $faker->paragraph;
    return [
        'detail_id' => Detail::all()->random()->id,
        'title' => $title,
        'slug' => str_slug($title),
        'description' => $faker->paragraph,
        'content' => $faker->paragraph,
        'category_id' => Category::all()->random()->id,
        'sub_category_id' => SubCategory::all()->random()->id,
        'image' => 'default.jpg',
        'image_caption' => 'image caption'.random_int(1, 1000),
    ];
});

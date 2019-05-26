<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Category;
use App\SubCategory;

$factory->define(SubCategory::class, function (Faker $faker) {
    $name = $faker->colorName;
    return [
        'category_id' => Category::all()->random()->id,
        'name' => $name,
        'slug' => str_slug($name),

    ];
});

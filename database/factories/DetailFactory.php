<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\User;
use App\Detail;

$factory->define(Detail::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
    ];
});

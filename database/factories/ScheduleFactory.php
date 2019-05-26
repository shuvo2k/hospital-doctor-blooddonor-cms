<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Detail;
use App\Schedule;

$factory->define(Schedule::class, function (Faker $faker) {
    return [
        'detail_id' => Detail::all()->random()->id,
        'slug' => 'detail'.'/'.Detail::all()->random()->id.'/'.$faker->company,
        'role' => 'hospitalstuff',
        'doctor_name' => $faker->name,
        'education_details' => $faker->colorName,
        'org_name' => $faker->company,
        'speciality' => 'Medicine',
        'start_time' => $faker->dateTime,
        'end_time' => $faker->dateTime,
        'days' => 'Sat-Wen',
        'experience' => '2 years',
    ];
});

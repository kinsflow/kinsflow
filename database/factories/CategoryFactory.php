<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Category::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'created_at' => now(),
        'updated_at' => now()
    ];
});

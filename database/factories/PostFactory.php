<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
        //
        'user_id' => rand(0,2),
        'category_id' => rand(0,2),
        'title' => $faker->title,
        'body' => $faker->text,

    ];
});

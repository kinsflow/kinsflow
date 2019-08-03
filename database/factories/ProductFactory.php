<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        //
        'category_id'=> rand(1,10),
        'name' => $faker->name,
        'description' => $faker->slug,
        'slug' => $faker->slug,
        'price' => $faker->randomFloat(1,20),
        'photo_id' => rand(1,10),
        'counter' => $faker->randomNumber(),
        'deleted_at' => $faker->dateTime,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});

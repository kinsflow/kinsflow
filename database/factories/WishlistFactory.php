<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Wishlist::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,10),
        'product_id' => rand(1,10),
        'category_id' => rand(1,10),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});

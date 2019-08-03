<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Cart;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Cart::class, function (Faker $faker) {
    return [
        //
        'user_id' => rand(1,10),
        'product_id' => rand(1,3),
        'quantity' => rand(1,4),
        'status' => rand(0,1),
        'created_at' => now(),
        'updated_at' => now()
    ];
});

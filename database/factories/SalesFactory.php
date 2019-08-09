<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Sale::class, function (Faker $faker) {
    return [
        'order_time' => now(),
        'product_id' => rand(1,10),
        'user_id' => rand(1,10),
        'quantity' => rand(1,10),
        'pay_id' => 'PAY-'.$faker->swiftBicNumber,
        'order_id' => $faker->swiftBicNumber,
        'created_at' => now(),
        'updated_at' => now(),
        ];
});

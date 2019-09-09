<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Photo;

$factory->define(Photo::class, function (Faker $faker) {
    return [
        'file_path' => $faker->fileExtension,
        'imageable_id' => rand(1,5),
        'imageable_type' => 'App\Product',

    ];
});

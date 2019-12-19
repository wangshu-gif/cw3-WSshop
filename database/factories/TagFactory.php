<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->firstname(),
        'code' => $faker->randomElement(['201-886','0209-33','384-245','562-003']),
        'Commodity_id'=>App\Commodity::inRandomOrder()->first()->id,
    ];
});

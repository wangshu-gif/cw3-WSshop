<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Commodity;
use Faker\Generator as Faker;

$factory->define(Commodity::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->firstname(),
        'num' => $faker->numberBetween(10,100),
        'type' =>$faker->randomElement(['food','frozen food','drinks','home']),
        'shelf_id'=>App\Shelf::inRandomOrder()->first()->id,
        //'keeper_id'=>App\Keeper::inRandomOrder()->first()->id,
    ];
});

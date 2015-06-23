<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Post::class, function ($faker) {
    return [
        'title' => ucwords($faker->sentence($faker->numberBetween(3,10))),
        'body' => $faker->paragraph($faker->numberBetween(10,20)),
        'likes'=> $faker->numberBetween(1, 1000),
    ];
});

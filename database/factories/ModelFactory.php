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

$factory->define(PlatziLaravel\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('_alexh'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\PlatziLaravel\Models\Post::class, function(Faker\Generator $faker){
    return [
        'title'=>$faker->title,
        'body'=>$faker->text,
        'slug'=>$faker->slug,
    ];
});

<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Article::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, (new \App\Models\User())->query()->count()),
        'title' => $faker->name,
        'text' => $faker->realText(500),
    ];
});
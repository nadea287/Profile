<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class)->create(),
        'title' => $faker->title,
        'description' => $faker->paragraph,
        'url' => $faker->url,
    ];
});

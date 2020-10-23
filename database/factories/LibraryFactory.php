<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Library;
use Faker\Generator as Faker;

$factory->define(Library::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2),
        'content' => $faker->paragraph(3, true)
    ];
});

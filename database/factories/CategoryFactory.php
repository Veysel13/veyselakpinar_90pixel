<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Entity\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'top_category' => 0,
        'name' => $faker->sentence(),
        'created_at' => now(),
        'updated_at' => now()
    ];
});

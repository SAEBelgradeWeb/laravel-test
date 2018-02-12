<?php

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,25),
        'category_id' => rand(1,3),
        'title' => $faker->sentence(4, true),
        'body' => $faker->realText(600),
        'excerpt' => $faker->realText(64)
    ];
});

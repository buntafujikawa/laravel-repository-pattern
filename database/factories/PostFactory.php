<?php

use Faker\Generator as Faker;

$factory->define(\App\Entities\Post::class, function (Faker $faker, $attributes) {
    return [
        'title' => $faker->title,
        'user_id' => $attributes['user_id'],
        'category_id' => $attributes['category_id'],
        'content' => $faker->text,
    ];
});

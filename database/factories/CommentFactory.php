<?php

use Faker\Generator as Faker;

$factory->define(\App\Entities\Comment::class, function (Faker $faker, $attributes) {
    return [
        'user_id' => $attributes['user_id'],
        'post_id' => $attributes['post_id'],
        'comment' => $faker->text,
    ];
});

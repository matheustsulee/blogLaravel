<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'path' => $this->faker->imageUrl('640', '480'),
        'post_id' => function(){
                return factory(\App\Post::class)->create()->id;
            },

    ];
});


<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $this->faker->sentence('6');
    $link = \Illuminate\Support\Str::slug($title);
    $img = $this->faker->image("storage/app/public/fotos/",1580,1580,'cats', null, false);

    return [
        'title' =>$title,
        'subtitle'=>$this->faker->sentence('15'),
        'content' => $this->faker->text('200'),
        'link'=> $link,
        'category_id' => function(){
            return factory(\App\Category::class)->create()->id;
        },
        'section_id' => function(){
        return factory(\App\Section::class)->create()->id;
        },
        'user_id' => $this->faker->numberBetween('1', '3')
    ];
});

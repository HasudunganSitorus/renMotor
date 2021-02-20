<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\Article;
use Faker\Generator as Faker;

$factory->define(\App\Article::class, function (Faker $faker) {
    return [
        'title' =>$faker->sentence(),
        'body' =>$faker->text,
        'slug' =>$faker->Str::slug($faker->body)
    ];
});

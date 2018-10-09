<?php
use Faker\Generator as Faker;
use App\Models\BlogPost;
use App\User;
use App\Models\BlogCategory;
use App\Models\BlogTag;

$factory->define(BlogPost::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->paragraph(50),
        'author_id' => User::inRandomOrder()->first()->id,
        'category_id' => BlogCategory::inRandomOrder()->first()->id,
        'created_at' => $faker->unixTime(),
        'updated_at' => $faker->unixTime()
    ];
});

$factory->define(BlogCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});

$factory->define(BlogTag::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
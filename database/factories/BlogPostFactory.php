<?php
use Faker\Generator as Faker;

$factory->define(App\Models\BlogPost::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->paragraph(10),
        'author_id' => $faker->numberBetween(1, 50),
        'created_at' => $faker->unixTime(),
        'updated_at' => $faker->unixTime()
    ];
});

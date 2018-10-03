<?php
use Faker\Generator as Faker;

use App\Models\Country;
use App\Models\Language;
use App\Models\TimeZone;
/*
 * |--------------------------------------------------------------------------
 * | Model Factories
 * |--------------------------------------------------------------------------
 * |
 * | This directory should contain each of the model factory definitions for
 * | your application. Factories provide a convenient way to generate new
 * | model instances for testing / seeding your application's database.
 * |
 */

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'photo' => '/image/avatar/avatar7.jpg',
        'city' => $faker->city(),
        'website' => $faker->url(),
        'bio' => $faker->text(),
        'country_id' => Country::inRandomOrder()->first()->id,
        'language_id' => Language::inRandomOrder()->first()->id,
        'timezone_id' => TimeZone::inRandomOrder()->first()->id

    ];
});

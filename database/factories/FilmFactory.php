<?php
use Faker\Generator as Faker;
use Carbon\Carbon;
$factory->define(App\Models\Film::class, function (Faker $faker) {
    return [
        'titre' => $faker->title,
        'prix' => $faker->randomDigit,
        'horaire' => $faker->randomDigit,
    ];
});
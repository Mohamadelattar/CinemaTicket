<?php
use Faker\Generator as Faker;
use App\Models\Film;
use Carbon\Carbon;
$factory->define(App\Models\Genre::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'film_id' => Film::all()->random()->id
    ];
});
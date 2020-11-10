<?php
use Faker\Generator as Faker;
use Carbon\Carbon;
$factory->define(App\Models\Acteur::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'image' => $faker->image,
    ];
});
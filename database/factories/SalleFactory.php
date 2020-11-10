<?php
use Faker\Generator as Faker;
use Carbon\Carbon;
$factory->define(App\Models\Salle::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
         
    ];
});
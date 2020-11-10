<?php
use Faker\Generator as Faker;
use App\Models\User;
use Carbon\Carbon;
$factory->define(App\Models\Abonnement::class, function (Faker $faker) {
    return [
        'description' => $faker->name,
        'user_id' => User::all()->random()->id
 
    ];
});
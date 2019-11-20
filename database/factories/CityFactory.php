<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\City;
use App\State;

$factory->define(City::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'id_state' => State::all()->random()->id,
    ];
});

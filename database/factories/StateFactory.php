<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\State;

$factory->define(State::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
    ];
});

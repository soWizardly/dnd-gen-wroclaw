<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Character::class, function (Faker $faker) {
  return [
    'name' => $faker->unique()->name,
    "str" => rand(10,20),
    "dex" => rand(10,20),
    "con" => rand(10,20),
    "int" => rand(10,20),
    "wis" => rand(10,20),
    "cha" => rand(10,20)
  ];
});

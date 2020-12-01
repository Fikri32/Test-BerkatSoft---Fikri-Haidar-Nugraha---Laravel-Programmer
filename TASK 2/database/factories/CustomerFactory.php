<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
      'nama' => $faker->name,
      'alamat' => $faker->streetAddress,
      'no_hp' => $faker->phoneNumber,
      'foto' => $faker->image('public/build/images/customer',640,480, null, false),
    ];
});

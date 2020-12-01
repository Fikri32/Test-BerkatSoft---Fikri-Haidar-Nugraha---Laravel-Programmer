<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produk;
use Faker\Generator as Faker;

$factory->define(Produk::class, function (Faker $faker) {
    return [
      'nama' => $faker->word,
      'harga' => $faker->randomNumber(8),
      'gambar' => $faker->image('public/build/images/produk',640,480, null, false),
      
    ];
});

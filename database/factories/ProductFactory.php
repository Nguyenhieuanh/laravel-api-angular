<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $category_id = rand(1, 10);
    $price = rand(1000, 100000);
    return [
        'name' => $faker->name,
        'category_id' => $category_id,
        'description' => $faker->sentence,
        'price' => $price
    ];
});

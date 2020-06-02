<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {

    $title = $faker->word.' '.$faker->word.' '.$faker->word;
    $slug = Str::slug($title);

    return [
        'name' => $title,
        'slug' => $slug,
        'desc' => $faker->text,
        'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 50),
        'image' => $faker->randomElement($array = array ('1','2','3', '4', '5', '6', '7', '8', '9', '10')).'.jpg',
        'category_id' => $faker->numberBetween(1, 7)
    ];
});

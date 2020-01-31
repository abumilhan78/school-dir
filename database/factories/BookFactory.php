<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'judul' => $faker->jobTitle,
        'penerbit' => $faker->company,
        'penulis' => $faker->name,
        'terbit' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'editor' => $faker->name,
        'isbn' => $faker->unique()->isbn13,
        'harga' => $faker->numberBetween(20000,200000)
    ];
});

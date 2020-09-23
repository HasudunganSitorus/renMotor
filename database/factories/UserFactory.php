<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Pemesanan;
use App\Motor;
use App\Models\Test;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Category;
use App\Product;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

// For Test Value Fakes
$factory->define('App\Models\Test', function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

// For Categories Value dummy
$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});


// Product Value dummy
$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'category_id' => \App\Category::inRandomOrder()->first()->id,
        'description' => $faker->paragraph,
        'price' => rand(1000, 99999)
    ];
});


// Pemesanan Value dummy
$factory->define(Pemesanan::class, function (Faker $faker) {
    $durasi = rand(1, 10);    
    $jumlah = rand(1, 5);
    $motor_id = rand(1, 10);
    return [
        'durasi' => $durasi,
        'jumlah' => $jumlah,
        'motor_id' =>$motor_id,
    ];
});

// Pemesanan Value dummy
$factory->define(Motor::class, function (Faker $faker) {
    return [
        'nama' => $faker->word(),
        'kode' => rand(10, 10),
        'kondisi' => $faker->word(),
        'avatar' => $faker->imageUrl(100, 100),
    ];
});

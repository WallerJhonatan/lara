<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => 'Waller Jhonatan',
        'email' => 'waller@ufv.br',
        'password' => $password ?: $password = bcrypt('123123'),
        'type' => 'admin',
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Product::class,function (Faker\Generator $faker){
    return [
        'name' => $faker->name(),
        'description' => $faker->sentence(5),
        'code' => $faker->unique()->randomNumber(),
        'statuses_id' => $faker->numberBetween(1,5),
    ];
});

$factory->define(App\Models\Status::class,function (Faker\Generator $faker){
    return [
        'description' => $faker->sentence(2),
    ];
});

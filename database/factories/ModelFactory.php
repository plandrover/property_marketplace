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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),

        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker){


    //Get a random user

    $user = \App\User::inRandomOrder()->first();

    //generate fake date for the post

    return [
        'user_id' => $user->id,
        'title' => $faker->sentence,
        'house_number'=>$faker->randomNumber(1),
        'description'=> $faker->text,
        'property_type'=> $faker->name,
        'price'=> $faker->randomNumber(6),
        'commission'=> $faker->randomNumber(4),
        'beds_no'=>$faker->randomNumber(1),
        'bathrooms_no'=>$faker->randomNumber(1),



    ];

});

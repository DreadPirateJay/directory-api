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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Employee::class, function ($faker) {
    return [
        'first_name'         => $faker->firstNameMale,
        'last_name'          => $faker->lastName,
        'photo'              => '/images/default_avatar.svg',
        'thumbnail'          => '/images/default_avatar.svg',
        'hire_date'          => $faker->dateTimeBetween('-20 years', '-1 week'),
        'birth_date'         => $faker->dateTimeBetween('-65 years', '-20 years'),
        'company'            => $faker->company,
        'department'         => ucwords($faker->bs),
        'title'              => ucwords($faker->bs),
        'address'            => $faker->address,
        'email'              => $faker->email,
        'password'           => bcrypt('m4dg3n1us'),
        'phone'              => $faker->phoneNumber,
        'notes'              => $faker->paragraph(3),
        'personal_address'   => $faker->address,
        'personal_phone'     => $faker->phoneNumber,
        'emergency_contact'  => $faker->name(),
        'emergency_relation' => $faker->word,
        'emergency_phone'    => $faker->phoneNumber,
    ];
});
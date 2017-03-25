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
        'name' => 'Fakultas Teknik',
        'username' => 'admin',
        'email' => 'admin@admin.com',
        'password' => bcrypt('admin'),
        'remember_token' => str_random(10),
    ];
});

$factory->defineAs(Spatie\Permission\Models\Role::class, 'fakultas', function (Faker\Generator $faker) {

    return [
        'name' => 'Fakultas',
    ];
});

$factory->defineAs(Spatie\Permission\Models\Role::class, 'prodi', function (Faker\Generator $faker) {

    return [
        'name' => 'Prodi',
    ];
});

$factory->defineAs(App\Menu::class, 'menu', function (Faker\Generator $faker) {
    return [
        'position' => $faker->unique()->numberBetween($min = 1, $max = 10),
        'title' => $faker->city,
        'url' => '#',
    ];
});

$factory->defineAs(App\Menu::class, 'menu_parent', function (Faker\Generator $faker) {
    return [
        'hasChildren' => true,
        'position' => $faker->unique()->numberBetween($min = 11, $max = 20),
        'title' => $faker->city,
        'url' => '#',
    ];
});

$factory->defineAs(App\Menu::class, 'dropdown', function (Faker\Generator $faker) {
    return [
        'parent_id' => $faker->numberBetween($min = 4, $max = 5),
        'position' => $faker->unique()->numberBetween($min = 1, $max = 50),
        'title' => $faker->city,
        'url' => '#',
    ];
});


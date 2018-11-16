<?php

use Faker\Generator as Faker;

$factory->defineAs(\App\Article::class, 'All', function (Faker $faker) {
    $faker = \Faker\Factory::create('ru_RU');
    return [
        'name' => $faker->name(),
        'email'=>$faker->unique()->safeEmail,
        'text' =>$faker->text,
    ];
});

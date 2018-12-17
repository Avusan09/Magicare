<?php

use Faker\Generator as Faker;

$factory->define(App\Inventory::class, function (Faker $faker) {
    return [
        'product' => $faker->name,
        'price' => $faker->numberBetween(100, 1000),
        'supplier' => $faker->address,
        'stored_location' => $faker->streetAddress,
        'status' => $faker->firstName,
        'used_in' => $faker->lastName,
        'serial_number'=>$faker->buildingNumber,
        'date' =>$faker->date(),
        'remarks' => $faker->text(100)
    ];
});

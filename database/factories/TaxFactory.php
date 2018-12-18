<?php

use Faker\Generator as Faker;

$factory->define(App\Tax::class, function (Faker $faker) {
    return [
        "date" => $faker->date(),
        "vehicle_prefix" => $faker->randomElements(),
        "vehicle_number" => $faker->numberBetween(10,1000),
        "vehicle_type" => $faker->randomElement(['Car', 'Bike', 'Scooter', 'Truck', 'Tipper']),
        "chasis" => $faker->randomElements(),
        "engine" => $faker->randomElements(),
        "rt_date" => $faker->date(),
        "rt_expiry_date" => $faker->date(),
        "ret_date" => $faker->date(),
        "ret_expiry_date" => $faker->date(),
        "rp_date" => $faker->date(),
        "rp_expiry_date" => $faker->date(),
        "rt_bill" => $faker->randomElement(),
        "rt_fiscal" => $faker->randomElement(),
        "rt_amount" => $faker->numberBetween(10,1000),
        "ret_bill" => $faker->randomElement(),
        "ret_fiscal" => $faker->randomElement(),
        "ret_amount" => $faker->numberBetween(10,1000),
        "rp_bill" => $faker->randomElements(),
        "rp_fiscal" => $faker->randomElement(),
        "insurance_start" => $faker->randomElement(),
        "rp_amount" => $faker->numberBetween(10,1000),
        "insurance_end" => $faker->randomElement(),
        "insured_amount" => $faker->numberBetween(10,1000),
        "remarks" => $faker->randomElements(),


    ];
});

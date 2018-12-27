<?php

use Faker\Generator as Faker;

$factory->define(App\Tax::class, function (Faker $faker) {
    return [
        "date" => $faker->date(),
        "vehicle_prefix" => $faker->randomElement(),
        "vehicle_number" => $faker->numberBetween(10,1000),
        "vehicle_type" => $faker->text(6),
        "chasis" => $faker->text(6),
        "engine" => $faker->text(6),
        "rt_date" => $faker->date(),

        "ret_date" => $faker->date(),

        "rp_date" => $faker->date(),

        "rt_bill" => $faker->date(),
        "rt_fiscal" => $faker->text(6),
        "rt_amount" => $faker->numberBetween(10,1000),
        "ret_bill" => $faker->text(6),
        "ret_fiscal" => $faker->text(6),
        "ret_amount" => $faker->numberBetween(10,1000),
        "rp_bill" => $faker->text(6),
        "rp_fiscal" => $faker->text(6),
        "insurance_start" => $faker->text(6),
        "rp_amount" => $faker->numberBetween(10,1000),
        "insured_amount" => $faker->numberBetween(10,1000),
        "insurance_end" => $faker->text(6),
        "policy" => $faker->text(6),
        "insurance_company" => $faker->text(6),
        "remarks" => $faker->text(6),


    ];
});

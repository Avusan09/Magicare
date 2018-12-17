<?php

use Faker\Generator as Faker;

$factory->define(App\Vehicles::class, function (Faker $faker) {
    return [
        'servicing_date' => $faker->date(),
        'vehical_prefix' => $faker->realText(25),
        'vehical_number' => $faker->randomNumber(),
        'type' =>  $faker->randomElement(['Yes', 'No']),
        'worked_hours' => $faker->numberBetween(0,10),
        'mobil' => $faker->numberBetween(4,10),
        'transmission_oil' => $faker->numberBetween(4,10),
        'hydrolic' => $faker->numberBetween(4,10),
        'coolent_water' => $faker->numberBetween(4,10),
        'coolent_filter' =>  $faker->randomElement(['Yes', 'No']),
        'mobil_filter' => $faker->randomElement(['Yes', 'No']),
        'diesel_filter' => $faker->randomElement(['Yes', 'No']),
        'hydrolic_filter' => $faker->randomElement(['Yes', 'No']),
        'air_filter' => $faker->randomElement(['Yes', 'No']),
        'pilot_filter' => $faker->randomElement(['Yes', 'No']),
        'transmission_filter' => $faker->randomElement(['Yes', 'No']),
        'water_safety' => $faker->randomElement(['Yes', 'No']),
        'breather' => $faker->randomElement(['Yes', 'No']),
        'tyres' => $faker->numberBetween(2,4),
        'tubes' => $faker->numberBetween(2,4),
        'spare_parts'=> $faker->randomElement(['Yes', 'No']),
        'engine_repair'=> $faker->randomElement(['None', 'Half', 'Full']),
        'total_cost' => $faker->numberBetween(0,10),
        'remarks' => $faker->text(100)


    ];
});

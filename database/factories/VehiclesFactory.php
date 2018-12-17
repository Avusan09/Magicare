<?php

use Faker\Generator as Faker;

$factory->define(App\Vehicles::class, function (Faker $faker) {
    return [
        'servicing_date' => $faker->date(),
        'vehical_prefix' => $faker->realText(25),
        'vehical_number' => $faker->randomNumber(),
        'type' =>  $faker->randomElement(['active', 'completed', 'on hold']),
        'worked_hours' => $faker->numberBetween(0,10),
        'mobil' => $faker->numberBetween(4,10),
        'transmission_oil' => $faker->numberBetween(4,10),
        'hydrolic' => $faker->numberBetween(4,10),
        'coolent_water' => $faker->numberBetween(4,10),
        'coolent_filter' =>  $faker->randomElement(['active', 'completed', 'on hold']),
        'mobil_filter' => $faker->randomElement(['active', 'completed', 'on hold']),
        'diesel_filter' => $faker->randomElement(['active', 'completed', 'on hold']),
        'hydrolic_filter' => $faker->randomElement(['active', 'completed', 'on hold']),
        'air_filter' => $faker->randomElement(['active', 'completed', 'on hold']),
        'pilot_filter' => $faker->randomElement(['active', 'completed', 'on hold']),
        'transmission_filter' => $faker->randomElement(['active', 'completed', 'on hold']),
        'water_safety' => $faker->randomElement(['active', 'completed', 'on hold']),
        'breather' => $faker->randomElement(['active', 'completed', 'on hold']),
        'tyres' => $faker->numberBetween(2,4),
        'tubes' => $faker->numberBetween(2,4),
        'spare_parts'=> $faker->randomElement(['active', 'completed', 'on hold']),
        'engine_repair'=> $faker->randomElement(['active', 'completed', 'on hold']),
        'total_cost' => $faker->numberBetween(0,10),
        'remarks' => $faker->text(100)


    ];
});

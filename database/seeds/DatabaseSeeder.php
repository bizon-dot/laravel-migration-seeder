<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trips;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            $newTrips = new Trips;
            $newTrips->destination_city = $faker->city();
            $newTrips->departure_city = $faker->city();
            $newTrips->id_customers = $faker->randomNumber(5, false);
            $newTrips->departure_date = $faker->dateTimeThisCentury();
            $newTrips->return_date = $faker->dateTimeThisCentury();
            $newTrips->total_participants = $faker->randomNumber(5, false);
            $newTrips->cost_for_person = $faker->randomNumber(5, false);
            $newTrips->save();

        }
    }
}

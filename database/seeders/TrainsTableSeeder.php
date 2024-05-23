<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $new_train = new Train();
            $new_train->agency = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->dateTimeThisMonth();
            $new_train->arrival_time = $faker->dateTimeThisMonth();
            $new_train->train_code = $faker->numberBetween(10000, 99999);
            $new_train->carriage = $faker->numberBetween(5, 15);
            $new_train->in_time = $faker->numberBetween(0, 1);
            $new_train->deleted = $faker->numberBetween(0, 1);
            $new_train->save();
        }
    }
}

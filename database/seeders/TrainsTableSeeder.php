<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\HttpFoundation\RequestMatcher\HostRequestMatcher;

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
            $train = new Train();
            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time("H:i");
            $train->arrival_time = $faker->time("H:i");
            $train->train_id_code = $faker->bothify('## ## ## - ## ### ?-????');
            $train->wagons = $faker->numberBetween(6, 18);
            $train->on_time = $faker->randomElement([true, false]);
            $train->cancelled = $faker->randomElement([true, false]);
            $train->save();
        }
    }
}

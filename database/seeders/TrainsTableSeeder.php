<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\train;
use App\Models\Trains;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(Faker $faker){
        for($i = 0; $i < 10; $i++){
            $newTrain= new Trains();

            $newTrain->company = $faker->word;
            $newTrain->departure_station = $faker->city;
            $newTrain->arrival_station = $faker->city;
            $newTrain->departure_time = $faker->time($format = 'H:i:s', $max = 'now');
            $newTrain->arrival_time = $faker->time($format = 'H:i:s', $max = 'now');
            $newTrain->train_code = $faker->text($maxNbChars=10);
            $newTrain->carriages_count = $faker->numberBetween($min = 1, $max = 10);
            $newTrain->on_time = $faker->boolean;
            $newTrain->cancelled = $faker->boolean;
            $newTrain->save();
        }
    }
}

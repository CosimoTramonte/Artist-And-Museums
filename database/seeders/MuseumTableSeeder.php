<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Museum;
use Faker\Generator as Faker;

class MuseumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15; $i++) {
            $new_museum = new Museum();
            $new_museum->name = $faker->name();
            $new_museum->slug = Museum::generateSlug($new_museum['name']);
            $new_museum->address = $faker->streetName();
            $new_museum->city = $faker->city();
            $new_museum->zip_code = $faker->numberBetween(9999, 99999);
            $new_museum->open_date = $faker->date();
            $new_museum->open_hour = $faker->time();
            $new_museum->close_hour = $faker->time();
            $new_museum->geographic_cordinates = $faker->text();

            $new_museum->save();
        }
    }
}

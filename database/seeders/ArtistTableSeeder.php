<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;
use Faker\Generator as Faker;

class ArtistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15; $i++) {
            $new_artist = new Artist();
            $new_artist->name = $faker->name();
            $new_artist->slug = Artist::generateSlug($new_artist['name']);
            $new_artist->type = $faker->word();
            $new_artist->date_of_birth = $faker->date();
            $new_artist->number_of_works = $faker->numberBetween(1, 255);
            $new_artist->description = $faker->text();
            $new_artist->main_works = $faker->text();

            $new_artist->save();
        }
    }
}

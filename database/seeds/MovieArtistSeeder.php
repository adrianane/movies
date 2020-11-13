<?php

use Illuminate\Database\Seeder;
use App\Movie;
use App\Artist;

class MovieArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //get all artists
        $artists = Artist::all();

        //populate the pivot table
        Movie::all()->each(function ($movie) use ($artists){
            $movie->artists()->attach(
                $artists->random(rand(1,3))->pluck('id')->toArray()
            );
        });

    }
}

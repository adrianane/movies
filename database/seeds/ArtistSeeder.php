<?php

use Illuminate\Database\Seeder;
use App\Artist;
class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artist::create([
            'name' => "Tom Hanks",
            'title' => "Star",
        ]);

        Artist::create([
            'name' => "Robin Wright",
            'title' => "Star",
        ]);

        Artist::create([
            'name' => "Gary Sinse",
            'title' => "Star",
        ]);

        Artist::create([
            'name' => "Robert Zemeckis",
            'title' => "Director",
        ]);
        Artist::create([
            'name' => "Winston Groom",
            'title' => "Writer",
        ]);
    }
}

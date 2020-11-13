<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::create([
            'status' => 2,
            'name' => "Space Force",
            'rating' => 6.9,
            'description' => "Space Froce desc",
            'image' => "http://127.0.0.1:8000/images/space-force.jpg"
        ]);

        Movie::create([
            'status' => 1,
            'name' => "Forest Gump",
            'rating' => 8.8,
            'description' => "Forest Gump desc",
            'image' => "http://127.0.0.1:8000/images/forest-gump.jpg"
        ]);

        Movie::create([
            'status' => 1,
            'name' => "Joker",
            'rating' => 7.0,
            'description' => "Joker desc",
            'image' => "http://127.0.0.1:8000/images/forest-gump.jpg"
        ]);
    }
}

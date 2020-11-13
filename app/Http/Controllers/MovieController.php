<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
        return Movie::with('artists')->visibileGoodRating()->get();
    }

    public function delete(Request $request, $id)
    {
        //throw an exception if a model is not found.
        $movie = Movie::findOrFail($id);
        $movie->delete();

        //204 No Content:  The server has successfully fulfilled the request and  there is no additional content to send
        return 204;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'rating' => 'required',
        ]);

        $movie = new Movie();
        $movie->name = $request->name;
        $movie->rating = $request->rating;
        $movie->description = $request->description;
        $movie->image = $request->image;
        $movie->save();

        return response()->json($movie, 201);
    }
}

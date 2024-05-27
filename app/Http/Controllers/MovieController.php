<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        return view('movies.create_edit');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'director' => 'required|max:255',
            'summary' => 'nullable|max:100',
            'genres' => 'required|array'
        ]);

        $movie = new Movie();
        $movie->title = $request->title;
        $movie->director = $request->director;
        $movie->summary = $request->summary;
        $movie->genres = json_encode($request->genres);
        $movie->save();

        return redirect()->route('movies.index')->with('success', 'Movie created successfully.');
    }

    public function edit(Movie $movie)
    {
        return view('movies.create_edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'title' => 'required|max:255',
            'director' => 'required|max:255',
            'summary' => 'nullable|max:100',
            'genres' => 'required|array'
        ]);

        $movie->title = $request->title;
        $movie->director = $request->director;
        $movie->summary = $request->summary;
        $movie->genres = json_encode($request->genres);
        $movie->save();

        return redirect()->route('movies.index')->with('success', 'Movie updated successfully.');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully.');
    }

    // Add this method for AJAX search
    public function search(Request $request)
    {
        $search = $request->query('q');
        $movies = Movie::where('title', 'LIKE', "%{$search}%")->get();

        return response()->json($movies);
    }
}

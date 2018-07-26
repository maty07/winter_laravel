<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{

    public function index()
    {
        $movies = Movie::OrderBy('id', 'DESC')->paginate(10);
        return view('movie.index', compact('movies'));
    }

    public function create()
    {
        $genres = Genre::OrderBy('id')->get();
        return view('movie.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required',
            'slug'          => 'required|unique:movies',
            'description'   => 'required',
            'author'        => 'required',
            'actors'        => 'required',
            'poster'        => 'required',
            'category'      => 'required',
        ]);

        $movie = Movie::create($request->all());

        $movie->genres()->sync($request->get('genres'));

        return redirect()->route('trailers.index')->with('success', 'Movie/Serie creada exitosamente !');
    }


    public function show($slug)
    {
        $movie = Movie::where('slug', '=', $slug)->first();
        $genres = DB::table('genre_movie')
                        ->join('movies', 'genre_movie.movie_id', '=', 'movies.id')
                        ->join('genres', 'genre_movie.genre_id', '=', 'genres.id')
                        ->where('movies.slug', '=', $slug)
                        ->select('genres.name')
                        ->get();
        return view('movie.show', compact('movie', 'genres'));
    }

  
    public function edit($id)
    {
        $movie = Movie::find($id);
        $genres = Genre::OrderBy('id')->get();
        return view('movie.edit', compact('movie', 'genres'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'          => 'required',
            'slug'          => 'required|unique:movies,slug',
            'description'   => 'required',
            'author'        => 'required',
            'actors'        => 'required',
            'poster'        => 'required',
            'category'      => 'required',
        ]);

        $movie = Movie::find($id);
        $movie->fill($request->all())->save();
        $movie->genres()->sync($request->get('genres'));

        return redirect()->route('trailers.index')
            ->with('success', 'Movie/Serie actualizada exitosamente !');

    }

    public function destroy($id)
    {
        Movie::find($id)->delete();
        return back()->with('success', 'Producto eliminado correctamente');
    }
}

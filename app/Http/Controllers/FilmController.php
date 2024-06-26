<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilmController extends Controller
{
    public function anaSayfa()
    {
        $movies =Film::query()->paginate(15);
        return view('front.films.index',compact('movies'));

    }

    public function addFavourite(Request $request)
    {
        $user =Auth::user();

        if(!$user->films->contains($request->movie)){
            $user->films()->attach($request->movie);
        }

        return redirect()->back();
    }

    public function indexFavoutire()
    {
        $movies =Auth::user()->films()->paginate(15);

        return view('front.films.index',compact('movies'));
    }


    public function removeFavourite(Request $request)
    {
        $film =Film::find($request->movie);
        $user = Auth::user();

        $user->films()->detach($film->id);

        return redirect()->back();


    }


    public function category($ByCategory)
    {
        $movies = Film::where('category', $ByCategory)->paginate(15);
        return view('front.films.index', compact('movies'));

    }
    public function type($ByType)
    {
        $movies = Film::where('type', $ByType)->paginate(15);
        return view('front.films.index', compact('movies'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front.films.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $film =new Film();
        $film->name = $request->name;
        $film->summary = $request->summary;
        $film->photo = 'https://www.shutterstock.com/shutterstock/videos/1084465417/thumb/11.jpg?ip=x480';
        $film->category = $request->category;
        $film->type = $request->type;

        $film->save();
        return redirect()->back()->withSuccess('Film Eklendi');

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $movie = Film::where('id',$id)->first();

        return view('front.films.show',compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

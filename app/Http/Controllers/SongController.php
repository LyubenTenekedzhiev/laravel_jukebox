<?php

namespace App\Http\Controllers;

use App\Songs;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $songs = Songs::all();
        return $songs;
    }

    public function create()
    {
        $songs = Songs::all();
        return view('songs.create', compact('songs'));
    }

    public function addToDB(Request $request)
    {
        $song = new Songs;

        $song->link = $request->input('link');
        $song->title = $request->input('title');
        $song->author = $request->input('author');
        $song->genre = $request->input('genre');
        $song->description = $request->input('description');
        $song->save();
        return redirect('/songs');
    }
}

<?php

namespace App\Http\Controllers;

use App\Songs;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function landingPage()
    {
        return view('landingPage');
    }

    public function index()
    {
        $songs = Songs::all();
        return view('songs.index', compact('songs'));
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
        $song->author_id = $request->input('author_id');
        $song->genre = $request->input('genre');
        $song->genre_id = $request->input('genre_id');
        $song->description = $request->input('description');
        $song->save();

        return redirect('/songs');
    }

    public function edit($id)
    {
        $song = Songs::findOrFail($id);
        return view('songs.edit', compact('song'));
    }

    public function update(Request $request, $id)
    {
        $song = Songs::findOrFail($id);

        $song->link = $request->input('link');
        $song->title = $request->input('title');
        $song->author = $request->input('author');
        $song->author_id = $request->input('author_id');
        $song->genre = $request->input('genre');
        $song->genre_id = $request->input('genre_id');
        $song->description = $request->input('description');
        $song->save();
        
        return redirect('/songs');
    }

    public function delete($id)
    {
        $song = Songs::findOrFail($id);
        $song->delete();
        return redirect('/songs');
    }
}

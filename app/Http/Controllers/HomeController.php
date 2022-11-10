<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $songs = Song::with('artist')->orderBy('id', 'desc')->simplePaginate(10);
        return view('homes.index', compact('songs'));
    }

    public function show($slug) {
        $song = Song::where('slug' ,$slug)->firstOrFail();
        $song->views += 1;
        $song->update();
        return view('homes.show', compact('song'));
    }
}

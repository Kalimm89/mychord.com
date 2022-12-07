<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Song;

class PopularController extends Controller
{
    public function index() {
        $songs = Song::with('artist')->orderBy('views', 'desc')->simplePaginate(6);
        return view('popular.index', compact('songs'));
    }

    // public function show($slug) {
    //     $artist = Artist::where('slug', $slug)->firstOrFail();
    //     $songs = $artist->songs()->orderBy('id', 'desc')->simplePaginate(10);
    //     return view('artists.show', compact('artist', 'songs'));
    // }
}

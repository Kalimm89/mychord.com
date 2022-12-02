<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtistSingleController extends Controller
{
    public function index() {
        // $songs = Artist::orderBy('id', 'desc')->simplePaginate(6);
        // return view('artists.index', compact('songs'));
        $songs = Song::with('artist')->orderBy('id', 'desc')->simplePaginate(6);
        return view('artists.index', compact('songs'));
    }

    public function show($slug) {
        $artist = Artist::where('slug', $slug)->firstOrFail();
        $songs = $artist->songs()->orderBy('id', 'desc')->simplePaginate(2);
        return view('artists.show', compact('artist', 'songs'));
    }
}

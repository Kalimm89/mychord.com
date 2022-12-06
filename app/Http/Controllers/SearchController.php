<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Song;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request) {
        $request->validate([
            's' => 'required',
        ]);
        $s = $request->s;
        $songs = Song::where('title', 'LIKE', "%{$s}%")->with('artist')->simplePaginate(10);
        $artists = Artist::where('title', 'LIKE', "%{$s}%")->with('songs')->simplePaginate(10);
        return view('homes.search', compact('songs', 'artists', 's'));
    }
}

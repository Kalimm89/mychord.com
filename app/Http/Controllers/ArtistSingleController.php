<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtistController extends Controller
{
    
    public function show($slug) {
        $artist = Artist::where('slug', $slug)->firstOrFail();
        $songs = $artist->songs()->orderBy('id', 'desc')->simplePaginate(2);
        return view('artists.show', compact('artist', 'songs'));
    }
}

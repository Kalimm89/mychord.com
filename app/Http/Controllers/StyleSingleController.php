<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Style;
use App\Models\Song;


class StyleSingleController extends Controller
{
    public function index() {
        // $styles = Style::orderBy('id', 'desc')->simplePaginate(10);
        $styles = Style::withCount('songs')->orderBy('songs_count', 'desc')->simplePaginate(10);
        return view('styles.index', compact('styles'));
    }

    public function show($slug) {
        $style = Style::where('slug' ,$slug)->firstOrFail();
        $songs = $style->songs()->with('artist')->orderBy('id', 'desc')->simplePaginate(10);
        return view('styles.show', compact('style', 'songs'));
    }
}

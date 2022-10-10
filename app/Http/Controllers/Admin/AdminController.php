<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Song;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $songs = Song::simplePaginate(10);
    return view('admin.index', compact('songs'));
    }
}

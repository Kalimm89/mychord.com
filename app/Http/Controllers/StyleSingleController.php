<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Style;

class StyleController extends Controller
{
    
    public function show($slug) {
        $style = Style::where('slug' ,$slug)->firstOrFail();
        $style->views += 1;
        $style->update();
        return view('styles.show', compact('style'));
    }
}

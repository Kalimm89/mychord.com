<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Song;
use App\Models\Style;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SongController extends Controller
{
    
    public function index()
    {
        $songs = Song::simplePaginate(10);
        return view('admin.songs.index', compact('songs'));
    }

    
    public function create()
    {
        $artists = Artist::pluck('title', 'id')->all();
        $styles = Style::pluck('title', 'id')->all();
        return view('admin.songs.create', compact('artists', 'styles'));
        
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'artist_id' => 'required|integer'
        ]);
        
        $data = $request->all();
        

        $song = Song::create($data);
        $song->styles()->sync($request->styles);
        return redirect()->route('songs.index')->with('success', 'Песня добавлена');
    }


    
    public function edit($id)
    {
        $song = Song::find($id);
        $artists = Artist::pluck('title', 'id')->all();
        $styles = Style::pluck('title', 'id')->all();
        return view('admin.songs.edit', compact('styles', 'artists', 'song'));
    }

 
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'artist_id' => 'required|integer'
        ]);
        $song = Song::find($id);

        $data = $request->all();

            // if($file = Song::uploadImage($request, $song->thumbnail)) {
            //     $data['thumbnail'] = $file;
            // }

        $song->update($data);
        $song->styles()->sync($request->styles);
        return redirect()->route('songs.index')->with('success', 'Изменения сохранены');
    }

  
    public function destroy($id)
    {
        $song = song::find($id);
        $song->styles()->sync([]);
        Storage::delete($song->thumbnail);
        $song->delete();
        return redirect()->route('songs.index')->with('success', 'Статья удалена');
    }
}

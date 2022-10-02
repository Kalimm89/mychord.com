<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Song;
use App\Models\Style;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('admin.songs.edit', compact('song'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $song = Song::find($id);
        $song->update($request->all());
        return redirect()->route('songs.index')->with('success', 'Изменения сохранены');
    }

    
    public function destroy($id)
    {
        $song = Song::find($id);
        // if ($song->songs->count()) {
        //     return redirect()->route('categories.index')->with('error', 'Ошибка! У категории есть записи');
        // }
        $song->delete();
        return redirect()->route('songs.index')->with('success', 'Исполнитель удалён');
    }
}

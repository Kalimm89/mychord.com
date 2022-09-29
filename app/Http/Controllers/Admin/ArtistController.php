<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtistController extends Controller
{
    
    public function index()
    {
        $artists = DB::table('artists')->simplePaginate(10);
        return view('admin.artists.index', compact('artists'));
    }

    
    public function create()
    {
        return view('admin.artists.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        Artist::create($request->all());
        $request->session()->flash('success', 'Исполнитель добавлен');
        return redirect()->route('artists.index');
    }


    
    public function edit($id)
    {
        $artist = Artist::find($id);
        return view('admin.artists.edit', compact('artist'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $artist = Artist::find($id);
        $artist->update($request->all());
        return redirect()->route('artists.index')->with('success', 'Изменения сохранены');
    }

    
    public function destroy($id)
    {
        $artist = Artist::find($id);
        // if ($artist->songs->count()) {
        //     return redirect()->route('categories.index')->with('error', 'Ошибка! У категории есть записи');
        // }
        $artist->delete();
        return redirect()->route('artists.index')->with('success', 'Исполнитель удалён');
    }
}

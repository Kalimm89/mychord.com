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
            'thumbnail' => 'nullable|image'
        ]);
        
        
        $data = $request->all();
       
        if ($request->hasFile('thumbnail')) {
            $folder = date('Y-m-d');
            $data['thumbnail'] = $request->file('thumbnail')->store("images/{$folder}");
        }

        Artist::create($data);
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
            'thumbnail' => 'nullable|image'
        ]);
        $artist = Artist::find($id);

        $data = $request->all();

            if($file = Artist::uploadImage($request, $artist->thumbnail)) {
                $data['thumbnail'] = $file;
            }


        $artist->update($data);
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

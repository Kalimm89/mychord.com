<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Style;

class StyleController extends Controller
{
    
    public function index()
    {
        $styles = DB::table('styles')->simplePaginate(10);
        return view('admin.styles.index', compact('styles'));
    }

   
    public function create()
    {
        return view('admin.styles.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        Style::create($request->all());
        $request->session()->flash('success', 'Стиль добавлен');
        return redirect()->route('styles.index');
    }

    

    
    public function edit($id)
    {
        $style = Style::find($id);
        return view('admin.styles.edit', compact('style'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $style = Style::find($id);
        $style->update($request->all());
        return redirect()->route('styles.index')->with('success', 'Изменения сохранены');
    }

    
    public function destroy($id)
    {
        $style = Style::find($id);
        // if ($artist->songs->count()) {
        //     return redirect()->route('categories.index')->with('error', 'Ошибка! У категории есть записи');
        // }
        $style->delete();
        return redirect()->route('styles.index')->with('success', 'Исполнитель удалён');
    }
}

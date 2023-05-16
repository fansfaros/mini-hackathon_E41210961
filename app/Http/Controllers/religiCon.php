<?php

namespace App\Http\Controllers;
use App\Models\Data;
use Illuminate\Http\Request;

class religiCon extends Controller
{
    // menampilkan data
    public function index (){
        $pendidikan = Data::get();
        return view('backend.religi.index',compact('religi'));
    }
    //menambah data
    public function create (){
        $religi = null;
        return view('backend.religi.index',compact('religi'));
    }
    public function store (Request $request){
        Data::create($request->all());
        return redirect()->route('religi.index')
                        ->with('success','Data religi baru telah selesai disimpan');
    }
    //menghapus data
    public function destroy($id)
    {
        $religi = Data::find($id);
        $religi->delete();
        return redirect()->route('religi.index')
                        ->with('success', 'Data religi telah dihapus');
    }
    //mengedit data
    public function edit($id)
    {
        $religi = Data::find($id);
        return view('backend.religi.edit', compact('religi'));
    }

    public function update(Request $request, $id)
    {
        $religi = Data::find($id);
        $religi->update($request->all());
        return redirect()->route('religi.index')
                        ->with('success', 'Data religi telah diperbarui');
    }
}

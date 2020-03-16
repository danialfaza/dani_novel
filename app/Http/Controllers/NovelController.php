<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Novel;
use App\Penulis;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Exports\NovelExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use DB;

class NovelController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_novel	= \App\Novel::where('judul','LIKE','%' .$request->cari.'%')->get();
    	}else{
    		$data_novel = \App\Novel::all();
    	}

        $penulis = Penulis::all(); 
    	
    	return view('novel.index',['data_novel' => $data_novel], compact('penulis'));
    }

    public function create(Request $request)
    {
        $files = $request->file('gambar');
        $fileName = $request->judul. '-' . $request->thn_terbit . '-'. $files->getClientOriginalName();
        $files->move(public_path("images "), $fileName);

        Novel::create([
            'judul'=> $request->judul,
            'thn_terbit'=> $request->thn_terbit,
            'penerbit'=> $request->penerbit,
            'penulis'=> $request->penulis,
            'kategori'=> $request->kategori,
            'harga'=> $request->harga,
            'gambar'=> $insert['gambar']="$fileName",
            'sinopsis'=> $request->sinopsis

        ]);

    	return redirect('/novel')->with('sukses','Data berhasil ditambahkan');
    	
    }
    public function edit($id)
    {
        $penulis = Penulis::all(); 
    	$novel = \App\Novel::find($id);
    	return view('novel/edit', ['novel'=> $novel], compact('penulis'));
    }
    public function update(Request $request, $id)
    {
        //dd($request->all());
    	$novel = \App\Novel::find($id);
    	$novel->update($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $novel->gambar = $request->file('gambar')->getClientOriginalName();
            $novel->save();
        }
    	return redirect('/novel')->with('sukses','Data berhasil diubah');
    }
    public function delete($id)
    {
    	$novel = \App\Novel::find($id);
    	$novel->delete();
    	return redirect('/novel')->with('sukses','Data berhasil dihapus');
    }

    public function export_excel()
    {
        return Excel::download(new NovelExport, 'novel.xlsx'); 
    }
}

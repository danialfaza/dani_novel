<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penulis;
use App\Novel;

class PenulisController extends Controller
{
    public function index()
    {
        $penulis = Penulis::all();
        return view('novel.penulis', compact('penulis'));
    }

    public function create(Request $request){
    	Penulis::create([
            'penulis'=> $request->penulis
        ]);

    	return redirect('/penulis')->with('sukses','Data berhasil ditambahkan');
    }

    public function edit($id){
    	$penulis = Penulis::find($id); 
    	return view('novel/editPenulis', ['penulis'=> $penulis]);
    }

    public function update(Request $request, $id)
    {
    	$id = $request['id'];
	    $update = Penulis::where('id', $id)->first();
	    $update->penulis =  $request['penulis'];

	    $update->update();

    	return redirect('/penulis');
    }

     public function detail($id){
    	$penulis = Penulis::find($id); 
    	$novel = Novel::all()->where('penulis', $id);
    	return view('novel/detailPenulis', ['novel'=> $novel], compact('penulis'));
    }
}

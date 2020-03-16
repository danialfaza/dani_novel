<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Penulis;

class TampilanController extends Controller
{
    public function index(Request $request)
    {
        $penulis = Penulis::all();
    	if($request->has('cari')){
    		$data_novel	= \App\Novel::where('judul','LIKE','%' .$request->cari.'%')->get();
    	}else{
    		$data_novel = \App\Novel::all();
    	}


    	return view('tampilan.index',['data_novel' => $data_novel], compact('penulis'));
    }
    
}

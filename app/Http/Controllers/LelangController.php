<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class LelangController extends Controller
{
    public function make()
    {
    	$barangs = Barang::orderBy('created_at','desc')->get();
    	return view('pages.lelang.make',compact('barangs'));
    }    

    public function addLelang(Request $req)
    {
    	
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use DB;
use Auth;

class BarangController extends Controller
{
    public function make()
    {
    	return view('pages.barang.make');
    }

    public function index()
    {
    	$barangs = Barang::where('user_id',Auth::user()->id)->orderBy('created_at','desc')->get();
    	return view('home',compact('barangs'));
    }

    public function search(Request $req)
    {
    	$barangs = Barang::where('nama_barang','like',"%".$req->searchbar."%")->orderBy('created_at','desc')->get();
    	$title = $req->searchbar;
    	$count = count($barangs);
    	
    	return view('pages.barang.searchRes',compact('barangs','title','count'));
    }

    public function store(Request $req)
    {

    }
}

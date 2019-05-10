<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lelang;

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

    public function index()
    {
    	$lelangs = Lelang::orderBy('created_at','desc')->where('status','ON GOING')->get();
        return view('home',compact('lelangs'));
    }
}

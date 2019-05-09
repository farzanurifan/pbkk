<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class AdminController extends Controller
{
    //
    public function barang()
    {
    	$barangs = Barang::orderBy('created_at','desc')->get();
        return view('pages.admin.barang',compact('barangs'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HistoriPenawaran;
use Auth;

class HistoriPenawaranController extends Controller
{
    public function index()
    {
    	$historis = HistoriPenawaran::where('user_id',Auth::user()->id)->orderBy('created_at','desc')->get();
    	return view('pages.profile.historipenawaran',compact('historis'));
    }
}

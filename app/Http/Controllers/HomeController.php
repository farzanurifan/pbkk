<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function kategori()
    {
        return view('pages.kategori');
    }


    public function profile()
    {
        return view('pages.profile');
    }

    public function editprofile()
    {
        return view('pages.editprofile');
    }

     public function filterbarang()
    {
        return view('pages.filterbarang');
    }
}

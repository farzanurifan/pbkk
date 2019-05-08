<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Response;

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
        return view('pages.profile.index');
    }

    public function store(Request $req)
    {
        User::where('id',$req->id)->update([
            'name' => $req->name,
            'alamat' => $req->alamat,
            'telepon' => $req->telepon
        ]);

        $user = User::where('id',$req->id)->first();

        return Response::json([
            'response' => "Data berhasil disimpan",
            'data' => $user
        ]);
    }

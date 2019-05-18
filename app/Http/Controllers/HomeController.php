<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Response;
use Image;

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

    public function updatepp(Request $request)
    {
        $data = $request->image;
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);
        $img = Image::make($data);
        $filename=time().".".'jpg';
        $img->save(public_path('/img/uploads/profile/'.$filename));
        $data = base64_decode($data);
        $image_name= time().'.jpg';
        $path = public_path() . "/img/uploads/" . $image_name;
        file_put_contents($path, $data);
    }
}

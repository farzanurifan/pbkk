<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Response;
use Image;
use Illuminate\Support\Facades\Hash;

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
        User::where('id',$request->id)->update(['path' => '/img/uploads/profile/'.$filename]);
        // $data = base64_decode($data);
        // $image_name= time().'.jpg';
        // $path = public_path() . "/img/uploads/" . $image_name;
        // file_put_contents($path, $data);

        return Response::json([
            'message' => "Foto profil sukses diubah."
        ]);
    }

    public function updatepw(Request $req)
    {
        $pass_old = $req->pass_old;
        $pass_new = $req->pass_new;
        $pass_conf = Hash::make($req->pass_conf);

        $user = User::where('id',$req->id)->first();

        if (Hash::check($pass_old,$user->password)) {
            if (Hash::check($pass_new, $pass_conf)) {
                if (Hash::check($pass_old,Hash::make($pass_new))) {
                    return Response::json([
                        'message' => 'Password baru tidak boleh sama dengan password lama.'
                    ]);
                }
                User::where('id',$req->id)->update([
                    'password' => $pass_conf
                ]);

                return Response::json([
                    'message' => 'Password telah berhasil diubah.'
                ]);
            }
            return Response::json([
                'message' => 'Pastikan password baru yang anda masukkan sama dengan konfirmasi password.'
            ]);
        }
        return Response::json([
            'message' => 'Password lama salah.'
        ]);
    }
}

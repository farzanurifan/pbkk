<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lelang;
use App\HistoriPenawaran;
use Response;

class LelangController extends Controller
{
    public function detail($id)
    {
        $lelang = Lelang::where('id',$id)->first();
        $counter = HistoriPenawaran::where('lelang_id',$id)->get();
        $counter = count($counter);
        return view('pages.lelang.detaillelang',compact('lelang','counter'));
    }

    public function allLelang()
    {
        $lelangs = Lelang::orderBy('created_at','desc')->where('status','ON GOING')->get();
        return view('pages.lelang.allLelang',compact('lelangs'));
    }

    public function kategori($kategori)
    {
        $lelangs = Lelang::orderBy('created_at','desc')->where('status','ON GOING')->get();
        return view('pages.lelang.kategori',compact('lelangs'));
    }

    public function make()
    {
    	$barangs = Barang::orderBy('created_at','desc')->get();
    	return view('pages.lelang.make',compact('barangs'));
    }   

    public function addLelang(Request $req)
    {
    	
    }

    public function historipenawaran(){
        return view('pages.lelang.historipenawaran');
    }

    public function index()
    {
    	$lelangs = Lelang::orderBy('created_at','desc')->where('status','ON GOING')->get();
        return view('home',compact('lelangs'));
    }

    public function changeStatus(Request $req)
    {
    	Lelang::where('id',$req->id)->update([
    		'status' => $req->status
    	]);

    	return Response::json([
    		'message' => 'Status telah berhasil diubah'
    	]);
    }

    public function updateHarga(Request $req)
    {
        $new_price = (float)$req->harga_new;
        $min_bid = (float)$req->min_bid;
        $harga_now = (float)$req->harga_now;

        if ($new_price < $min_bid + $harga_now) {
            return Response::json([
                'message' => "Data tidak berubah. Harga yang anda masukkan tidak sesuai ketentuan."
            ]);
        }

        Lelang::where('id',$req->id)->update([
            'penawar_id' => $req->penawar_id,
            'harga' => $req->harga_new
        ]);

        $checker = HistoriPenawaran::where('user_id',$req->penawar_id)->where('lelang_id',$req->id)->get();
        if (count($checker)<1) {
            HistoriPenawaran::create([
                'user_id' => $req->penawar_id,
                'lelang_id' => $req->id
            ]);
        }

        return Response::json([
            'message' => "Data penawaran anda telah dimasukkan. Anda penawar tertinggi saat ini."
        ]);
    }
}

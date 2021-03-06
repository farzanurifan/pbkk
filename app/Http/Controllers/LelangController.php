<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lelang;
use App\HistoriPenawaran;
use App\TipeBarang;
use Response;
use Auth;
use Image;

class LelangController extends Controller
{
    public function changeStatusBeli(Request $req)
    {
        Lelang::where('id',$req->id)->update([
            'status_transaksi' => 'NOT PAID'
        ]);

        return Response::json([
            'message' => "Pembelian dilakukan. Silakan unggah bukti pembayaran pada laman Transaksi Beli."
        ]);
    }

    public function beliShow()
    {
        $lelangs = Lelang::where('penawar_id',Auth::user()->id)->orderBy('updated_at','desc')->get();
        return view('pages.profile.beli',compact('lelangs'));
    }

    public function jualShow()
    {
        $lelangs = Lelang::where('user_id',Auth::user()->id)->orderBy('updated_at','desc')->get();
        return view('pages.profile.jual',compact('lelangs'));   
    }

    public function beli(Request $req)
    {
        if($req->hasFile('path')){
            $foto=$req->file('path');
            $filename=time().".".$foto->getClientOriginalExtension();
        }
        else{
            $filename="None";
        }

        if($req->hasFile('path')){
            $img=Image::make($foto->getRealPath());
            
            $img->save(public_path('/img/uploads/resources/payment/'.$filename));
        }

        Lelang::where('id',$req->id)->update([
            'path' => '/img/uploads/resources/payment/'.$filename
        ]);

        return redirect('/beli');
    }

    public function jual(Request $req)
    {
        Lelang::where('id',$req->id)->update([
            'status_transaksi' => 'PAID'
        ]);

        return Response::json([
            'message' => 'Status telah berhasil diubah.'
        ]);
    }

    public function detail($id)
    {
        $lelang = Lelang::where('id',$id)->first();
        if ($lelang->status=="INACTIVE" or $lelang->status=="ENDED") {
            $lelangs = Lelang::orderBy('created_at','desc')->where('status','ON GOING')->get();
            return view('pages.lelang.allLelang',compact('lelangs'));
        }
        $counter = HistoriPenawaran::where('lelang_id',$id)->get();
        $counter = count($counter);
        return view('pages.lelang.detaillelang',compact('lelang','counter'));
    }

    public function allLelang()
    {
        $lelangs = Lelang::orderBy('created_at','desc')->where('status','ON GOING')->get();
        return view('pages.lelang.allLelang',compact('lelangs'));
    }

    public function searchByKategori($id)
    {
        if ($id == "all") {
            $lelangs = Lelang::where('status','ON GOING')->orderBy('created_at','desc')->get();
        }
        else
        {
            $lelangs = Lelang::whereHas('Barang',function($query) use($id){
                $query->where('tipebarang_id',$id);
            })->where('status','ON GOING')->orderBy('created_at','desc')->get();
        }

        foreach ($lelangs as $lelang) {
            $barang = $lelang->Barang()->first();
            $lelang->{'path'} = $barang->path;
            $lelang->{'nama_barang'} = $barang->nama_barang;
        }
        return Response::json([
            'lelang' => $lelangs
        ]);
    }

    public function searchByKatt($id)
    {
        $lelangs = Lelang::whereHas('Barang',function($query) use($id){
            $query->where('tipebarang_id',$id);
        })->where('status','ON GOING')->orderBy('created_at','desc')->get();   

        foreach ($lelangs as $lelang) {
            $barang = $lelang->Barang()->first();
            $lelang->{'path'} = $barang->path;
            $lelang->{'nama_barang'} = $barang->nama_barang;
        }
        $tipebarangs = TipeBarang::all();
        return view('pages.lelang.kategori',compact('lelangs','tipebarangs'));
    }

    public function kategori()
    {
        $lelangs = Lelang::orderBy('created_at','desc')->where('status','ON GOING')->get();
        $tipebarangs = TipeBarang::all();
        return view('pages.lelang.kategori',compact('lelangs','tipebarangs'));
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

        $lelangs = HistoriPenawaran::where('lelang_id',$req->id)->get();
        $count_lelang = count($lelangs);

        return Response::json([
            'message' => "Data penawaran anda telah dimasukkan. Anda penawar tertinggi saat ini.",
            'count' => $count_lelang
        ]);
    }
}

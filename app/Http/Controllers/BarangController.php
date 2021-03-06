<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Lelang;
use App\TipeBarang;
use App\HistoriPenawaran;
use DB;
use Auth;
use Image;
use Response;
use Storage;

class BarangController extends Controller
{
    public function index()
    {
    	$barangs = Barang::orderBy('created_at','desc')->get();
        return view('home',compact('barangs'));
    }

    public function getAll()
    {
        $barangs = Barang::orderBy('created_at','desc')->get();
        return Response::json($barangs);
    }

    public function search(Request $req)
    {
        $lelangs = Barang::whereHas('Lelang',function($query){
            $query->where('status','ON GOING');
        })->where('nama_barang','like',"%".$req->searchbar."%")->orderBy('created_at','desc')->get();
    	$title = $req->searchbar;
    	$count = count($lelangs);
    	
    	return view('pages.lelang.searchRes',compact('lelangs','title','count'));
    }

    public function searchKategori(Request $req)
    {
        $lelangs = TipeBarang::where('tipe_barang','like',"%".$req->selectopt."%")->orderBy('created_at','desc')->get();
        foreach ($lelangs as $lelang) {
            $temp = $lelang->Lelang()->first();
            if ($temp->status != "ON GOING") {
                unset($lelang);
            }
        }
        $title = $req->selectopt;
        $count = count($lelangs);
        
        return view('pages.lelang.kategori',compact('lelangs','title','count'));
    }

    public function delItems(Request $req)
    {
        $filenya = Barang::where('id',$req->id)->first();
        $item = Barang::where('id',$req->id);
        $lels = Lelang::where('barang_id',$req->id);
        $historitawar = HistoriPenawaran::where('lelang_id',$req->id);
        $historitawar->delete();
        $lels->delete();
        $item->delete();

        Storage::disk('public')->delete($filenya->path);
        return Response::json([
            'message' => 'Data sukses dihapus'
        ]);
    }

    public function addItems()
    {
        $tipebarangs = TipeBarang::all();
        return view('pages.barang.make',compact('tipebarangs'));
    }
//13may
    /*
    public function detail()
    {
        return view('pages.barang.detailbarang');
    }
    */
//
    public function listItems()
    {
        $barangs = Barang::where('user_id',Auth::user()->id)->orderBy('created_at','desc')->get();
        return view('pages.profile.kelolabarang',compact('barangs'));
    }

    public function storeItems(Request $req)
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
            
            $img->save(public_path('/img/uploads/resources/'.$filename));
        }
        $uniq_token = uniqid();
        Barang::create([
            'user_id' => Auth::user()->id,
            'nama_barang' => $req->nama_barang,
            'harga_awal' => $req->harga_awal,
            'path' => '/img/uploads/resources/'.$filename,
            'special_token' => $uniq_token,
            'keterangan_barang' => $req->keterangan_barang,
            'tipebarang_id' => $req->tipe_barang
        ]);

        $brg = Barang::where('special_token',$uniq_token)->first();
        Lelang::create([
            'barang_id' => $brg->id,
            'user_id' => Auth::user()->id,
            'harga' => $req->harga_awal,
            'status' => 'INACTIVE',
            'durasi' => $req->durasi,
            'min_bid' => $req->min_bid
        ]);

        return redirect('/barang');
    }


    public function getBarangLelang($id)
    {
        $barang = Barang::where('id',$id)->first();
        $lelang = Lelang::where('barang_id',$id)->first();
        return Response::json([
            'barang' => $barang,
            'lelang' => $lelang
        ]);
    }

    public function updateBarangLelang(Request $req)
    {
        $special_token = uniqid();
        Barang::where('id',$req->id_barang)->update([
            'nama_barang' => $req->nama_barang,
            'harga_awal' => $req->harga_awal,
            'keterangan_barang' => $req->keterangan_barang,
            'special_token' => $special_token
        ]);

        Lelang::where('barang_id',$req->id_barang)->update([
            'durasi' => $req->durasi,
            'harga' => $req->harga_awal,
            'min_bid' => $req->min_bid
        ]);

        $brg = Barang::where('special_token',$special_token)->first();
        $lelang = Lelang::where('barang_id',$brg->id)->first();

        return Response::json([
            'message' => 'Data talah berhasil diubah.',
            'barang' => $brg,
            'lelang' => $lelang
        ]);
    }
}

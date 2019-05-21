@extends('layouts.app')

@section('content')
  <main id="main">
    <section id="portfolio" class="wow fadeInUp"style="background-color:#FFFFFF">
    
    <div class="container">
      <div class="section-header">
        <h2 style="text-align: center;">Histori Penawaran<b></b></h2>
      </div>
    </div>
    <br>
    <div class="container-fluid">
      <div class="row no-gutters">
        
        <table width="100%" class="table table-hover table-striped table-dark">
          <thead>
            <tr>
              <th width="10%"></th>
              <th style="text-align: center" width="30%">Nama Barang</th>
              <th style="text-align: center" width="15%">Harga Terakhir</th>
              <th style="text-align: center" width="30%">Status Penawaran</th>
              <th></th>
              
            </tr>
          </thead>
          <tbody>
            @foreach($historis as $histori)
            <tr>
              <td style="text-align: center;"><img src="{{asset($histori->Lelang->Barang->path)}}" style="height: 50px;width: 50px;"></td>
              <td style="text-align: center;"><a href="{{URL::to('/lelang').'/'.$histori->Lelang->id}}">{{$histori->Lelang->Barang->nama_barang}}</a></td>
              <td style="text-align: center;">Rp. {{number_format($histori->Lelang->harga,2,',','.')}}</td>
              <td style="text-align: center;">
                @if($histori->Lelang->penawar_id == Auth::user()->id && $histori->Lelang->status == "ON GOING")
                  <p>Penawaran anda tertinggi saat ini.</p>
                @elseif($histori->Lelang->penawar_id == Auth::user()->id && $histori->Lelang->status == "INACTIVE")
                  <p>Penawaran anda tertinggi saat ini.</p>
                @elseif($histori->Lelang->penawar_id == Auth::user()->id && $histori->Lelang->status == "ENDED")
                  <p>Anda memenangkan pelelangan item {{$histori->Lelang->Barang->nama_barang}}.</p>
                @elseif($histori->Lelang->penawar_id != Auth::user()->id && $histori->Lelang->status == "ENDED")
                  <p>User lain memenangkan lelang item {{$histori->Lelang->Barang->nama_barang}}</p>
                @elseif($histori->Lelang->penawar_id != Auth::user()->id && $histori->Lelang->status == "INACTIVE")
                  <p>User lain memegang penawaran tertinggi.</p>
                @elseif($histori->Lelang->penawar_id != Auth::user()->id && $histori->Lelang->status == "ON GOING")
                  <p>User lain memegang penawaran tertinggi.</p>
                @endif
              </td>
              <td style="text-align: center">
                @if($histori->Lelang->penawar_id == Auth::user()->id && $histori->Lelang->status == "ENDED" && $histori->Lelang->status_transaksi == "")
                  <a style="text-align: center" dataID="{{$histori->lelang_id}}" class="btn btn-info penawaran_buy" href="#beliPenawaranModal" data-toggle="modal">Beli</a>
                @elseif($histori->Lelang->status_transaksi != "")
                  <button style="text-align: center" dataID="{{$histori->lelang_id}}" class="btn btn-info penawaran_buy" data-toggle="modal" disabled="">Beli</button>
                @else
                  <button style="text-align: center" class="btn btn-info penawaran_buy" data-toggle="modal" disabled>Beli</button>
                @endif
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>

    </div>
    @include('pages.lelang.confirm')
    </section>


    <!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    
@endsection

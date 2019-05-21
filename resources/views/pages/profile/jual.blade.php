@extends('layouts.app')

@section('content')
  <main id="main">
    <section id="portfolio" class="wow fadeInUp"style="background-color:#FFFFFF">
    
    <div class="container">
      <div class="section-header">
        <h2 style="text-align: center;">Transaksi Penjualan<b></b></h2>
      </div>
    </div>
    <br>
    <div class="container-fluid">
      <div class="row no-gutters">
        
        <table width="100%" class="table table-hover table-striped table-dark">
          <thead>
            <tr>
              <th width="15%">Bukti Pembayaran</th>
              <th style="text-align: center" width="25%">Nama Barang</th>
              <th style="text-align: center" width="15%">Harga Terakhir</th>
              <th style="text-align: center" width="30%">Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($lelangs as $lelang)
            @if($lelang->user_id==Auth::user()->id && $lelang->status_transaksi!="")
            <tr>
              @if($lelang->path=="")
                <td style="text-align: center;"></td>
              @else
                <td style="text-align: center;"><a href="{{asset($lelang->path)}}" target="_blank"><img src="{{asset($lelang->path)}}" style="height: 50px;width: 50px;"></a></td>
              @endif
              <td style="text-align: center;">{{$lelang->Barang->nama_barang}}</td>
              <td style="text-align: center;">Rp. {{number_format($lelang->harga,2,',','.')}}</td>
              <td style="text-align: center;" id="status_transaksi_jual{{$lelang->id}}">
                @if($lelang->status_transaksi=="NOT PAID" && $lelang->path=="")
                  <p>Belum dibayar. Menunggu pembeli unggah bukti pembayaran.</p>
                @elseif($lelang->status_transaksi=="NOT PAID" && $lelang->path!="")
                  <p>Menunggu konfirmasi penjual.</p>
                @else
                  <p>Barang telah dikonfirmasi penjual.</p>
                @endif
              </td>
              <td id="body-transaksi-jual{{$lelang->id}}">
              @if($lelang->path=="")
                <button class="btn btn-success penawaran_jual" dataID="{{$lelang->id}}" disabled>Jual</button>
              @elseif($lelang->status_transaksi=="PAID")
                <button class="btn btn-success penawaran_jual" dataID="{{$lelang->id}}" href="#jualPenawaranModal" data-toggle="modal" disabled>Jual</button>
              @else
                <a class="btn btn-success penawaran_jual" dataID="{{$lelang->id}}" href="#jualPenawaranModal" data-toggle="modal">Jual</a>
              @endif
              </td>
            </tr>
            @endif
            @endforeach
          </tbody>
        </table>

      </div>

    </div>
    @include('pages.lelang.confirmjual')
    </section>


    <!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    
@endsection

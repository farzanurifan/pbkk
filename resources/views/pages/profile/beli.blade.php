@extends('layouts.app')

@section('content')
  <main id="main">
    <section id="portfolio" class="wow fadeInUp"style="background-color:#FFFFFF">
    
    <div class="container">
      <div class="section-header">
        <h2 style="text-align: center;">Transaksi Pembelian<b></b></h2>
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
              <th style="text-align: center" width="30%">Status Beli</th>
            </tr>
          </thead>
          <tbody>
            @foreach($lelangs as $lelang)
            @if($lelang->penawar_id==Auth::user()->id && $lelang->status_transaksi!="")
            <tr>
              @if($lelang->path=="")
                <td style="text-align: center;">
                  <form action="{{route('lelang_barang_beli')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="path" class="form-control-file">
                    <input value="{{$lelang->id}}" name="id" hidden>
                    <input type="submit" class="btn btn-success form-control" value="Submit">
                  </form>
                </td>
              @else
                <td style="text-align: center;"><a href="{{asset($lelang->path)}}" target="_blank"><img src="{{asset($lelang->path)}}" style="height: 50px;width: 50px;"></a></td>
              @endif
              <td style="text-align: center;">{{$lelang->Barang->nama_barang}}</td>
              <td style="text-align: center;">Rp. {{number_format($lelang->harga,2,',','.')}}</td>
              <td style="text-align: center;">
                @if($lelang->status_transaksi=="NOT PAID" && $lelang->path=="")
                  <p>Belum dibayar. Segera unggah bukti pembayaran.</p>
                @elseif($lelang->status_transaksi=="NOT PAID" && $lelang->path!="")
                  <p>Menunggu konfirmasi penjual.</p>
                @else
                  <p>Barang telah dikonfirmasi penjual.</p>
                @endif
              </td>
            </tr>
            @endif
            @endforeach
          </tbody>
        </table>

      </div>

    </div>
    
    </section>


    <!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    
@endsection

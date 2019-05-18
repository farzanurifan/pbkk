@extends('layouts.app')

@section('content')
  <main id="main">
    <section id="portfolio" class="wow fadeInUp"style="background-color:#FFFFFF">
    
    <div class="container">
      <div class="section-header">
        <h2 style="text-align: center;">Kelola barang-barang anda<b><p><a href="{{route('barangs_make')}}" class="btn btn-success">Tambah</a></p></b></h2>
      </div>
    </div>
    <br>
    <div class="container-fluid">
      <div class="row no-gutters">
        
        <table width="100%" class="table table-hover table-striped table-dark">
          <thead>
            
              <th width="10%"></th>
              <th style="text-align: center" width="20%">Nama Barang</th>
              <th style="text-align: center" width="15%">Harga awal</th>
              <th style="text-align: center" width="10%">Status Barang</th>
              <th style="text-align: center" width="10%">Durasi Lelang</th>
              <th style="text-align: center" width="20%">Keterangan</th><br>
              <th></th>
            
          </thead>
          <tbody>
          @foreach($barangs as $barang)
            <tr id="barang{{$barang->id}}">
              <td style="text-align: center"><img src="{{asset($barang->path)}}" alt="" style="height: 50px;width: 50px;"></td>
              <td style="text-align: center;" id="brgnama{{$barang->id}}"><a href="{{URL::to('/lelang').'/'.$barang->Lelang->id}}">{{$barang->nama_barang}}</a></td>
              <td style="text-align: center" id="brgharga{{$barang->id}}">Rp. {{number_format($barang->harga_awal,2,',','.')}}</td>
              <td style="text-align: center" >
                @if($barang->Lelang->status == "INACTIVE")
                  <input type="checkbox" dataID="{{$barang->id}}" class="toggle_lelang" data-toggle="toggle;center" data-on="ON GOING" data-off="INACTIVE" data-style="slow" data-offstyle="danger">
                @elseif($barang->Lelang->status == "ON GOING")
                  <input type="checkbox" dataID="{{$barang->id}}" class="toggle_lelang" checked data-toggle="toggle" data-on="ON GOING" data-off="INACTIVE" data-style="slow" data-offstyle="danger">
                @endif
              </td>
              <td style="text-align: center" id="brgdurasi{{$barang->id}}">{{$barang->Lelang->durasi}}</td>
              <td style="text-align: left" id="brgdurasi{{$barang->id}}">{{$barang->keterangan_barang}}</td>
              <td style="text-align: center">
                  <a style="text-align: center" dataID="{{$barang->id}}" class="btn btn-warning barang_edit" href="#editBarangModal" data-toggle="modal">Ubah</a>
                  <a style="text-align: center" dataID="{{$barang->id}}" class="btn btn-danger barang_hapus" href="#delBarangModal" data-toggle="modal">Hapus</a>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>

      </div>

    </div>
    @include('pages.barang.edit')
    @include('pages.barang.delete')
    </section>

    <!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    
@endsection

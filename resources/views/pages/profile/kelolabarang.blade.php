@extends('layouts.app')

@section('content')
  <main id="main">
    <section id="portfolio" class="wow fadeInUp"style="background-color:#FFFFFF">
    
    <div class="container">
      <div class="section-header">
        <h2 style="text-align: center;">Kelola barang-barang anda</h2>
        <p><a href="{{route('barangs_make')}}">Tambahkan barang</a></p>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row no-gutters">
        
        <table class="table table-condensed">
          <thead>
            <tr>
              <th></th>
              <th>Nama Barang</th>
              <th>Harga awal</th>
              <th>Status</th>
              <th>Durasi Lelang</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          @foreach($barangs as $barang)
            <tr id="barang{{$barang->id}}">
              <td><img src="{{asset($barang->path)}}" alt="" style="height: 50px;width: 50px;"></td>
              <td id="brgnama{{$barang->id}}">{{$barang->nama_barang}}</td>
              <td id="brgharga{{$barang->id}}">Rp. {{number_format($barang->harga_awal,2,',','.')}}</td>
              <td>
                @if($barang->Lelang->status == "INACTIVE")
                  <input type="checkbox" dataID="{{$barang->id}}" class="toggle_lelang" data-toggle="toggle" data-on="ON GOING" data-off="INACTIVE" data-style="slow" data-offstyle="danger">
                @elseif($barang->Lelang->status == "ON GOING")
                  <input type="checkbox" dataID="{{$barang->id}}" class="toggle_lelang" checked data-toggle="toggle" data-on="ON GOING" data-off="INACTIVE" data-style="slow" data-offstyle="danger">
                @endif
              </td>
              <td id="brgdurasi{{$barang->id}}">{{$barang->Lelang->durasi}}</td>
              <td>
                  <a dataID="{{$barang->id}}" class="btn btn-warning barang_edit" href="#editBarangModal" data-toggle="modal">Ubah</a>
                  <a dataID="{{$barang->id}}" class="btn btn-danger barang_hapus" href="#delBarangModal" data-toggle="modal">Hapus</a>
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

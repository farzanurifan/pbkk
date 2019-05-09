@extends('layouts.app')

@section('content')
  <main id="main">
    <section id="portfolio" class="wow fadeInUp"style="background-color:#EEEEEE">
    
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
              <th></th>
            </tr>
          </thead>
          <tbody>
          @foreach($barangs as $barang)
            <tr id="barang{{$barang->id}}">
              <td><img src="{{asset($barang->path)}}" alt="" style="height: 50px;width: 50px;"></td>
              <td>{{$barang->nama_barang}}</td>
              <td>Rp. {{number_format($barang->harga_awal,2,',','.')}}</td>
              <td><button dataID="{{$barang->id}}" class="btn btn-danger barang_hapus">Hapus</button></td>
            </tr>
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

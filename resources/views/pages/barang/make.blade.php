@extends('layouts.app')

@section('content')
  <main id="main">
    <section id="portfolio" class="wow fadeInUp"style="background-color:#EEEEEE">
        <div class="container">
          <div class="row">
            <h2>Tambahkan barang</h2>
          </div>
            <form action="{{route('barangs_store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                          <label for="nama_barang" class="control-label">Nama Barang</label>
                          <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Masukkan nama barang">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                          <label for="kategorinya" class="control-label">Kategori</label>
                           <select type="text" class="form-control" name="tipe_barang" id="tipe_barang" placeholder="Masukkan kategori barang">
                                <option selected disabled>Pilih Kategori</option>
                                @foreach($tipebarangs as $tipebarang)
                                <option value="{{$tipebarang->id}}">{{$tipebarang->tipe_barang}}</option>
                                @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="gambarnya">Gambar</label>
                          <input type="file" name="path" class="form-control-file" id="gambarnya">
                      </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                          <label for="harga_awal" class="control-label">Harga Awal</label>
                          <input type="number" class="form-control" name="harga_awal" id="nama_barang" placeholder="Masukkan harga awal">
                      </div>
                    </div>
                    
                    <div class="col-md-3">
                      <div class="form-group">
                          <label for="harga_awal" class="control-label">Minimal Kenaikan Harga Tawaran</label>
                          <input type="number" class="form-control" name="min_bid" id="nama_barang" placeholder="Masukkan harga">
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                          <label for="durasi" class="control-label">Durasi Lelang</label>
                          <input type="number" class="form-control" name="durasi" id="durasi" placeholder="Masukkan durasi lelang (hari)">
                      </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="comment">Keterangan Barang</label>
                        <textarea class="form-control" rows="3"  id="comment" name="keterangan_barang"></textarea>
                      </div>
                    </div>
                <div class="col-md-3">
                      <div class="form-group">
                          <label for="durasi" class="control-label" style="color: #EEEEEE;">Submit</label>
                          <input type="submit" class="btn btn-success form-control" value="Submit">
                      </div>
                    </div>
                  
                </div>
            </form>
        </div>
    </section>
  

    <!-- #portfolio -->
    

    <!--==========================
      Clients Section
    ============================-->
    
@endsection
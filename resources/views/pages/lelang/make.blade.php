@extends('layouts.app')

@section('content')
  <main id="main">
    <section id="portfolio" class="wow fadeInUp"style="background-color:#EEEEEE">
        <div class="container">
          <div class="row">
            <h2>Tambahkan barang untuk dilelang</h2>
          </div>
            <form action="{{route('lelang_store')}}" method="POST">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                          <label id="input_lelang_barang_btn">Barang</label>
                          <select id="input_lelang_barang" class="form-control" required>
                              <option selected disabled hidden>Pilih barang</option>
                              @foreach($barangs as $barang)
                                <option value="{{$barang->id}}">{{$barang->nama_barang}}</option>
                              @endforeach
                          </select>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="durasi" class="control-label">Durasi Lelang</label>
                            <input type="number" name="durasi" class="form-control" id="durasi" placeholder="Tetapkan durasi lelang">
                        </div>
                    </div>
                    <input name="harga" class="form-control" hidden>
                </div>
                
                <div class="row">
                      <div class="col-xs-3">
                          <input type="submit" class="btn btn-success" value="Submit">
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
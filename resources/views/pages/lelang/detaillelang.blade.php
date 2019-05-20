@extends('layouts.app')

@section('content')




  <!--==========================
    Intro Section
  ============================-->

  <section id="team" class="wow fadeInUp">
      <div class="container">
          <div class="section-header" style="font-size: 25px; text-align: center;">
              <h2>Detail Barang "{{$lelang->Barang->nama_barang}}"</h2>
              <hr>
              <section style="width:100%; height: 300px; background-color: #f4f4f4">
                  <div class="w3-content w3-display-container" style="">
                    <img class="mySlides" src="{{asset($lelang->Barang->path)}}" style="padding-right: 32%;padding-left: 32%; height: 300px">
                    
                  </div>
              </section>
              <hr>
              <br>
          </div>
          <div class="clock"></div>
          <div class="row" style="padding-right: 120px; padding-left: 120px">          
              <div class="col-lg-9 content">
                  <div class="container">           
                    <table class="table table-dark table-striped">
                      <thead>
                        <tr>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><i class="fa fa-handshake-o" > Nama Barang</i></td>
                          <td>{{$lelang->Barang->nama_barang}}</td>
                        </tr>
                        <tr>
                          <td><i class="fa fa-clone" aria-hidden="true"> Kategori Barang</i></td>
                          <td>{{$lelang->Barang->TipeBarang->tipe_barang}}</td>
                        </tr>
                        <tr>
                          <td><i class="  fa fa-balance-scale" aria-hidden="true"> Harga Awal</i></td>
                          <td>Rp. {{number_format($lelang->Barang->harga_awal,2,',','.')}}</td>
                        </tr>
                        <tr>
                          <td><i class="fa fa-hourglass-3" aria-hidden="true"> Durasi Lelang</i></td>
                          <td>{{$lelang->durasi}} hari</td>
                        </tr>
                        <tr>
                          <td><i class="fa fa-user" aria-hidden="true"> Di Unggah Oleh</i></td>
                          <td>{{$lelang->User->name}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="padding-0 box-v4-alert">
                    <p style="font-size: 16px"><b>Keterangan Barang : </b> {{$lelang->Barang->keterangan_barang}} </p>
                    
                  </div>
              </div>

              <div class="col-lg-3 col-md-6 rightside-panel">
                  <div class="member"  >
                    <div class="details" style="color: black">
                      <h4 style="font-size: 25px">Terdapat<br><span style="color: red;font-size:25px ">{{$counter}}</span>Pelelang</h4>
                      <hr>
                      <span style="font-size: 20px;color: red"><b id="bid_harga_sekarang">Rp. {{number_format($lelang->harga,2,',','.')}}</b></span>
                      <span>Pelelang dengan penawaran harga tertinggi terakhir akan menjadi pembeli resmi</span>
                    </div>
                  </div>

                  @if(Auth::user()->id==$lelang->user_id)
                      
                  @else
                      @if($lelang->penawar_id==Auth::user()->id)
                          <b><label style="color: green">Anda penawar tertinggi</label><b>
                      @else
                          <a id="button-tawar-barang" dataID="{{$lelang->id}}" dataIDP="{{Auth::user()->id}}" minbid="{{$lelang->min_bid}}" class="btn-get-started" style="color: #ffffff" href="#lelangBarangModal" data-toggle="modal">
                              <div class="" style="background-color: #2e4ca5; height: 35px; border-radius: 3px; text-align: center; font-size: 16px; padding-top: 5px; margin-top: 10px">
                                Tawar Barang
                              </div>
                          </a>
                      @endif
                  @endif
              </div>
          </div>
      </div>
      @include('pages.lelang.bidding')
  </section>

  <script type="text/javascript">
    var clock;

    var lelang = {!! json_encode($lelang->toArray()) !!};
    var durasi = lelang.durasi
    var currentDate = new Date();
    var tanggalBerakhir = new Date(lelang.created_at);
    tanggalBerakhir.setDate(tanggalBerakhir.getDate() + durasi);

    var diff = tanggalBerakhir.getTime() / 1000 - currentDate.getTime() / 1000;

    if (diff <= 0){
      diff = 0;
    }
    
    $(document).ready(function() {      
      clock = $('.clock').FlipClock(diff, {
        countdown: true,
        clockFace: 'DailyCounter'
      });
    });
  </script>

@endsection
@extends('layouts.app')

@section('content')
    <!--==========================
      Rekomendasi Barang Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp"style="background-color:#EEEEEE">
      @include('pages.lelang.searchkategori')
        <div class="container-fluid">
            <div class="row no-gutters">
                @foreach($lelangs as $lelang)
                <div class="col-lg-3 col-md-3" style="padding: 10px">
                  <div class="portfolio-item wow fadeInUp">
                    <a href="{{URL::to('/lelang').'/'.$lelang->id}}" class="" >
                      <img src="{{asset($lelang->Barang->path)}}" alt="">
                      <div class="portfolio-overlay">
                        <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                      </div>
                      <div class="" style="background-color: #909090; height: 60px; margin-top: 5px; opacity: 0.8;">
                          <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">{{$lelang->Barang->nama_barang}}<br />Rp. {{number_format($lelang->harga,2,',','.')}}</span></h2>
                      </div>
                    </a>
                  </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- #portfolio -->


@endsection
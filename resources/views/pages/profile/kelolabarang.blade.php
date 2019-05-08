@extends('layouts.app')

@section('content')

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" >

    <div class="intro-content">
      @auth
        @if(Auth::user()->email_verified_at=="")
          <div class="card">
            <div class="card-body">
              <h6>Verifikasi E-Mail Anda ! jika belum menerima notifikasi E-Mail, <a href="{{ route('verification.resend') }}">{{ __('klik disini') }}</a></h6>
            </div>
          </div>
        @endif
      @endauth
      <h2>Jangan Buang <span>Barangmu !</span><br><span>Lelang </span>segera disini !</h2>
      @include('pages.barang.search')
    </div>

    <div id="intro-carousel" class="owl-carousel" style="opacity: 0.8">
      <div class="item" style="background-image: url('img/a.jpg');"></div>
      <div class="item" style="background-image: url('img/b.jpg');"></div>
       <div class="item" style="background-image: url('img/c.jpg');"></div>
      <div class="item" style="background-image: url('img/d.jpg');"></div>
       <div class="item" style="background-image: url('img/e.jpg');"></div>
    </div>

  </section><!-- #intro -->


  <main id="main">
    <section id="portfolio" class="wow fadeInUp"style="background-color:#EEEEEE">
    @if($count==0)
      <div class="container">
          <div class="section-header">
              <h2 style="text-align: center;">Kelola barang-barang anda</h2>
          </div>
      </div>
    @else
      <div class="container">
        <div class="section-header">
          <h2 style="text-align: center;">Barang ditemukan berdasarkan pencarian {{$title}}</h2>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">
          @foreach($barangs as $barang)
            <div class="col-lg-3 col-md-3" style="padding: 10px">
              <div class="portfolio-item wow fadeInUp">
                <a href="{{URL::to('/barang').'/'.$barang->id}}" class="" >
                  <img src="{{asset('img/').$barang->path}}" alt="">
                  <div class="portfolio-overlay">
                    <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                  </div>
                  <div class="" style="background-color: #909090; height: 60px; margin-top: 5px; opacity: 0.8;">
                      <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">{{$barang->nama_barang}}<br />Rp. {{$barang->harga_awal}}</span></h2>
                    </div>
                </a>
              </div>
            </div>
          @endforeach

        </div>

      </div>
    @endif
    </section>

    <!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    
@endsection

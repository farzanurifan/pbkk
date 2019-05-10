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
              <h6>Verifikasi E-Mail Anda ! Jika belum menerima notifikasi E-Mail, <a href="{{ route('verification.resend') }}">{{ __('klik disini') }}</a></h6>
            </div>
          </div>
        @endif
      @endauth
      <h2>Jangan Buang <span>Barangmu !</span><br><span>Lelang </span>segera disini !</h2>
      @include('pages.lelang.search')
      
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

    <!--==========================
      Kategori Barang Section
    ============================-->
     <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header" >
          <h2 style="text-align: center;"><img src="img/category.jpg" alt="">KATEGORI BARANG</h2>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-2 col-md-2" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="/kategori/dummy" class="" >
                <img src="img/bb.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                  
                  <div class="" style="background-color: #f9f9f9; height: 40px; margin-top: 50px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 100px; text-align: center; font-size: 30px; color: #000000">Elektronik</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-2 col-md-2" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="/kategori/dummy" class="" >
                <img src="img/cc.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 40px; margin-top: 50px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 100px; text-align: center; font-size: 30px; color: #000000">Pria</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-2 col-md-2" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="/kategori/dummy" class="" >
                <img src="img/dd.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 40px; margin-top: 50px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 100px; text-align: center; font-size: 30px; color: #000000">Wanita</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-2 col-md-2" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="/kategori/dummy" class="" >
                <img src="img/ee.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 40px; margin-top: 50px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 100px; text-align: center; font-size:30px; color: #000000">Buku</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-2 col-md-2" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="/kategori/dummy" class="" >
                <img src="img/ff.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 40px; margin-top: 50px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 100px; text-align: center; font-size: 30px; color: #000000">Furniture</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-2 col-md-2" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="/kategori/dummy" class="" >
                <img src="img/ii.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 40px; margin-top: 50px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 100px; text-align: center; font-size: 30px; color: #000000">Kendaraan</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->
    

    <!--==========================
      Rekomendasi Barang Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp"style="background-color:#EEEEEE">
      <div class="container">
        <div class="section-header">
          <h2 style="text-align: center;">REKOMENDASI BARANG</h2>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="hasilcariberanda.html" class="" >
                <img src="img/rec1.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                </div>
                <div class="" style="background-color: #909090; height: 60px; margin-top: 5px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Laptop Lenovo VIBE<br />Rp. 10.000</span></h2>
                  </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="hasilcariberanda.html" class="" >
                <img src="img/rec2.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                  </div>
                <div class="" style="background-color: #909090; height: 60px; margin-top: 5px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Cardigan Young FX<br />Rp. 254.000</span></h2>
                  </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="hasilcariberanda.html" class="" >
                <img src="img/rec3.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                  </div>
                <div class="" style="background-color: #909090; height: 60px; margin-top: 5px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Lampu Meja Artistik<br />Rp. 62.500</span></h2>
                  </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="hasilcariberanda.html" class="" >
                <img src="img/rec4.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                 </div>
                <div class="" style="background-color: #909090; height: 60px; margin-top: 5px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Motor Repsol 2014<br />Rp. 8.400.000</span></h2>
                  </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="hasilcariberanda.html" class="" >
                <img src="img/rec5.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                   </div>
                <div class="" style="background-color: #909090; height: 60px; margin-top: 5px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">1 Set Buku Percy Jacson<br />Rp. 126.000</span></h2>
                  </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="hasilcariberanda.html" class="" >
                <img src="img/rec6.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                  </div>
                <div class="" style="background-color: #909090; height: 60px; margin-top: 5px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Sneakers PUMA Orange-Light<br />Rp. 2.100.000</span></h2>
                  </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="hasilcariberanda.html" class="" >
                <img src="img/rec7.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                  </div>
                <div class="" style="background-color: #909090; height: 60px; margin-top: 5px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Inova Putih Large 2016<br />Rp. 94.000</span></h2>
                  </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="hasilcariberanda.html" class="" >
                <img src="img/rec8.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                  </div>
                <div class="" style="background-color: #909090; height: 60px; margin-top: 5px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Samsung S7 Edge 32GB<br />Rp. 4.175.000</span></h2>
                  </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section>

    @auth
    <section id="portfolio" class="wow fadeInUp"style="background-color:#EEEEEE">
      <div class="container">
        <div class="section-header">
          <h2 style="text-align: center;">BARANG TERBARU</h2>
        </div>
      </div>

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
                      <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">{{$lelang->Barang->nama_barang}}<br />Starts at Rp. {{number_format($lelang->harga,2,',','.')}}</span></h2>
                    </div>
                </a>
              </div>
            </div>
          @endforeach

        </div>

      </div>
    </section>
    @endif

    <!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    
@endsection

@extends('layouts.app')

@section('content')

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      @auth
        @if(Auth::user()->email_verified_at=="")
          <div class="card">
            <div class="card-body">
              <h6>Please verify your email address. If you did not recieve the email, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a></h6>
            </div>
          </div>
        @endif
      @endauth
      <h2>Kamu butuh <span>buku?</span><br><span>Cari</span> sekarang juga!</h2>
      <div class="container" >
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-10" style="padding-left: 185px">
                <input style="text-align: center; height: 50px; font-size: 20px"  type="text" name="name" class="form-control" id="name" placeholder="Masukkan genre buku yang anda cari" data-rule="minlen:1" data-msg="Please enter the address" list="wilayah" />
                  <datalist id="wilayah">
                    <option>Biologi</option>
                    <option>Matematika</option>
                    <option>Informatika</option>
                    <option>Fisika</option>
                    <option>Bisnis</option>
                    <option>Kimia</option>
                    <option>Arsitektur</option>
                  </datalist>
              </div>
            </div>
            
            <div>
            <!-- <a href="#" class="btn-projects scrollto">Get Started</a> -->
              <a href="hasilcariberanda.html" class="btn-get-started scrollto">Cari</a>
              <!-- <a href="result_search.hmtl">
              <button class="btn-get-started" type="submit" style="font-size: 18px">Cari</button>
              </a> -->
            </div>
            <!-- <div class="text-center"><button type="submit">Send Message</button></div> -->
          </form>
        </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" style="opacity: 0.4">
      <div class="item" style="background-image: url('img/intro-carousel/a.jpeg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/b.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/c.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/d.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/e.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    

    <!--==========================
      Services Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2 style="text-align: center;">Rekomendasi Genre</h2>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="hasilcariberanda.html" class="" >
                <img src="templates/img/buku/biology.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                  
                  <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 100px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 40px; color: #000000">Biologi</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="hasilcariberanda.html" class="" >
                <img src="templates/img/buku/Design.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 100px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 40px; color: #000000">Desain Grafis</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="hasilcariberanda.html" class="" >
                <img src="templates/img/buku/architecture.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 100px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 40px; color: #000000">Arsitektur</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="hasilcariberanda.html" class="" >
                <img src="templates/img/buku/computer.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 100px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 40px; color: #000000">Informatika</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="hasilcariberanda.html" class="" >
                <img src="templates/img/buku/business.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 100px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 40px; color: #000000">Bisnis</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="hasilcariberanda.html" class="" >
                <img src="templates/img/buku/math.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 100px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 40px; color: #000000">Matematika</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="hasilcariberanda.html" class="" >
                <img src="templates/img/buku/physic.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 100px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 40px; color: #000000">Fisika</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3" style="padding: 10px">
            <div class="portfolio-item wow fadeInUp">
              <a href="hasilcariberanda.html" class="" >
                <img src="templates/img/buku/chemistry.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>

                  <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 100px; opacity: 0.8;">
                    <h2 ><span style="margin-top: 190px; text-align: center; font-size: 40px; color: #000000">Kimia</span></h2>
                  </div>

                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    
@endsection

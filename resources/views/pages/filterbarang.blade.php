@extends('layouts.app')

@section('content')

<body id="body">

  <!--==========================
    Header
  ============================-->
  <header id="header" style="height: 115px">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">INTER-<span>LIBRARY LOAN</span></a></h1>
        <br>
        <h1 style="font-size: 16px ">
          <a href="beranda.html">Beranda </a>
          <i class="fa fa-angle-double-right"></i>
          <a style="color: #50d8af;" href="#">Hasil Pencarian </a>
        </h1>
        <br>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>


      <nav id="nav-menu-container">
        <ul class="nav-menu" >
          <li class="menu-active"><a href="#body">Beranda</a></li>
           <li class="menu-has-children"><a href="#">Mahasiswa</a>
            <ul>
              <li><a href="loginfix/profilakun.html">Profil</a></li>
              <li><a href="daftarpinjamanmhsb.html">Daftar Pinjaman</a></li>
              <li><a href="beranda.html">Keluar</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" style="height: 300px">
    
    <div class="container" >
      <div class="intro-content">
        <!-- <h2>Kamu membutuhkan <span>kos?</span><br><span>Temukan</span> sekarang!</h2> -->
        <div class="container" >
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-10" style="padding-left: 185px">
                <input style="text-align: center; height: 50px; font-size: 20px"  type="text" name="name" class="form-control" id="name" value="Biologi" data-rule="minlen:1" data-msg="Please enter the address" list="wilayah" />
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
              <!-- <a href="#" class="btn-get-started scrollto">Search</a> -->
              <a href="hasilcarimhs.html" class="btn-get-started scrollto">Cari</a>
            </div>
            <!-- <div class="text-center"><button type="submit">Send Message</button></div> -->
          </form>
        </div>
      </div>
    </div>


    <div id="intro-carousel" class="owl-carousel" style="height: 300px; opacity: 0.4">
      <div class="item" style="background-image: url('img/intro-carousel/selasar-atas-1024x768.jpg'); height: 300px"></div>
      <div class="item" style="background-image: url('img/intro-carousel/kost jimbaran bali-16.jpg'); height: 300px"></div>
      <div class="item" style="background-image: url('img/intro-carousel/66.jpg'); height: 300px"></div>
      <div class="item" style="background-image: url('img/intro-carousel/bisnis-kos-kosan.jpg'); height: 300px"></div>
      <div class="item" style="background-image: url('img/intro-carousel/11.jpg'); height: 300px"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="result">
      <div style="margin-top: 20px">
        <div class="col-md-12 ">

          <div class="col-md-3 scrollable">
            <div class="panel box-v4" >
                <div class="panel-heading " style="background-color: #e2e2e2">
                  <div class="section-header" style="height: 20px; ">
                    <h3 style="text-align: center; margin-top: 5px">Filter</h3>
                  </div>
                </div>

                <div class="panel-body padding-0 col-md-12 border-none">
                  <div class="row-md-12">
                      <div class="col-md-12  padding-0 box-v4-alert">
                        <p style="font-size: 16px; "><b>Sub-Genre : </b>
                        <select style="font-size: 16px; width: 230px; text-align: center;" >
                          <option value="volvo">Semua Sub-Genre</option>
                          <option value="volvo">Humanologi</option>
                          <option value="volvo">Mikrobiologi</option>
                          <option value="saab">Makrobiologi</option>
                          <option value="opel">Botani</option>
                          <option value="opel">Ekologi</option>
                          <option value="opel">Virus</option>
                        </select>
                        </p>

                        <div style="padding-top: 25px"></div>

                        <p style="font-size: 16px; "><b>Semester : </b>
                        <select style="font-size: 16px; width: 230px; text-align: center;" >
                          <option value="volvo">Semua Semester</option>
                          <option value="volvo">Smt 1</option>
                          <option value="volvo">Smt 2</option>
                          <option value="saab">Smt 3</option>
                          <option value="opel">Smt 4</option>
                        </select>
                        </p>

                        <div style="padding-top: 25px"></div>

                        <p style="font-size: 16px; "><b>Tahun Terbit : </b>
                        <select style="font-size: 16px; width: 230px; text-align: center;" >
                          <option value="volvo">Semua Tahun</option>
                          <option value="volvo">2010</option>
                          <option value="volvo">2011</option>
                          <option value="volvo">2012</option>
                          <option value="volvo">2013</option>
                          <option value="volvo">2014</option>
                          <option value="saab">2015</option>
                          <option value="opel">2016</option>
                          <option value="volvo">2017</option>
                          <option value="volvo">2018</option>
                        </select>
                        </p>

                        <div style="padding-top: 25px"></div>

                        <p style="font-size: 16px; "><b>Pengarang : </b>
                        <select style="font-size: 16px; width: 230px; text-align: center;" >
                          <option value="volvo">Semua Pengarang</option>
                          <option value="volvo">Dicky Kaisar Utomo</option>
                          <option value="saab">M.Rosyid</option>
                          <option value="saab">Hattami</option>
                          <option value="saab">Sidqi Tp</option>
                          <option value="saab">Adhatus Solichah Ahmadiyah, S.KOM., M.SC.</option>
                        </select>
                        </p>

                        <div style="padding-top: 25px"></div>

                        <p style="font-size: 16px; "><b>Penerbit : </b>
                        <select style="font-size: 16px; width: 230px; text-align: center;" >
                          <option value="volvo">Semua Penerbit</option>
                          <option value="volvo">Gramedia</option>
                          <option value="volvo">Yudhistira</option>
                          <option value="volvo">Erlangga</option>
                          <option value="volvo">Ecos Fracos Brotherhood</option>
                        </select>
                        </p>

                        <div style="padding-top: 25px"></div>


                        <hr>
                        <div style="text-align: right;">
                          <a href="hasilcarimhs.html"><button class="btn-get-started" type="submit" style="font-size: 16px; background-color: #e2e2e2; color: #000000"><b>Cari</b></button></a>
                        </div>
                      
                      </div>
                  </div>  
                        

                  
                </div>
            </div> 
          </div>

          <div class="col-md-9 scrollable">
            <div class="panel box-v4">
                <div class="panel-heading " style="background-color: #e2e2e2" >
                  <div class="section-header" style="height: 20px">
                    <h2 style="text-align: center; margin-top: 5px">Hasil Pencarian</h2>
                  </div>
                </div>

                <div class="panel-body padding-0 col-md-12 border-none">
                    <div class="col-md-12 box-v4-alert">
                        <section id="portfolio" class="wow fadeInUp" >
                          <div class="row">
                            <!-- <div class="row"> -->
                              <div class="col-lg-4 col-md-3" style="padding-bottom: 25px">
                                <div class="portfolio-item wow fadeInUp">
                                  <a href="hasilcarimhs.html" class="" >
                                    <img src="img/buku/biology2.jpg" alt="">
                                    <div class="portfolio-overlay">
                                      <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
                                      
                                      <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 170px; opacity: 0.8;">
                                        <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">mempelajari sel hewan</span></h2>
                                      </div>

                                    </div>
                                  </a>
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-3">
                                <div class="portfolio-item wow fadeInUp">
                                  <a href="hasilcarimhs.html" class="" >
                                    <img src="img/buku/biology3.jpg" alt="">
                                    <div class="portfolio-overlay" >
                                      <div class="portfolio-info"><h2 class="wow fadeInUp" style="color: #b70707"></h2></div>
                                      
                                      <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 170px; opacity: 0.8;">
                                        <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Bahaya Sel Parasit</span></h2>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-3">
                                <div class="portfolio-item wow fadeInUp">
                                  <a href="hasilcarimhs.html" class="" >
                                    <img src="img/buku/biology4.jpg" alt="">
                                    <div class="portfolio-overlay">
                                      <div class="portfolio-info"><h2 class="wow fadeInUp" ></h2></div>
                                      
                                      <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 170px; opacity: 0.8;">
                                        <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Mempelajari Sel Tumbuhan</span></h2>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-3">
                                <div class="portfolio-item wow fadeInUp">
                                  <a href="hasilcarimhs.html" class="" >
                                    <img src="img/buku/biology5.jpg" alt="">
                                    <div class="portfolio-overlay">
                                      <div class="portfolio-info"><h2 class="wow fadeInUp" ></h2></div>
                                      
                                      <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 170px; opacity: 0.8;">
                                        <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Matriks Kehidupan</span></h2>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </div>
                        
                              <div class="col-lg-4 col-md-3">
                                <div class="portfolio-item wow fadeInUp">
                                  <a href="hasilcarimhs.html" class="" >
                                    <img src="img/buku/biology6.jpg" alt="">
                                    <div class="portfolio-overlay">
                                      <div class="portfolio-info"><h2 class="wow fadeInUp" ></h2></div>
                                      
                                      <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 170px; opacity: 0.8;">
                                        <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Kompleksitas MH</span></h2>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-3">
                                <div class="portfolio-item wow fadeInUp">
                                  <a href="hasilcarimhs.html" class="" >
                                    <img src="img/buku/biologi3.jpg" alt="">
                                    <div class="portfolio-overlay">
                                      <div class="portfolio-info"><h2 class="wow fadeInUp" style="color: #b70707"></h2></div>
                                      
                                      <div class="" style="background-color: #f9f9f9; height: 55px; margin-top: 170px; opacity: 0.8;">
                                        <h2 ><span style="margin-top: 190px; text-align: center; font-size: 20px; color: #000000">Sel Mutasi</span></h2>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </div>

                              
                            <!-- </div>  -->

                          </div>
                        </section><!-- #portfolio -->
                    </div>
                </div>
            </div> 
          </div>
        </div>
      </div>
    </section>

  </main>

    <!--==========================
      Clients Section
    ============================-->
    
  <!--==========================
    Footer
  ============================-->
  <div class="col-md-12">
    <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>INTER-LIBRARY LOAN</strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
          -->
        </div>
      </div>
    </footer>
  </div>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>

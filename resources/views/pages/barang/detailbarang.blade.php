@extends('layouts.app')

@section('content')




  <!--==========================
    Intro Section
  ============================-->

  <section id="team" class="wow fadeInUp">
      <div class="container">
      <div class="section-header" style="font-size: 25px; text-align: center;">
              <h2>Detail Barang</h2>
              <hr>
             <section id="" style="width:100%; height: 300px; background-color: #f4f4f4">
    <div class="w3-content w3-display-container" style="">
      <img class="mySlides" src="img/rec1.jpg" style="padding-right: 32%;padding-left: 32%; height: 300px">
    </div>
    
  </section>
  <hr>
  <br>
            </div>
        <div class="row" style="padding-right: 120px; padding-left: 120px">          
          <div class="col-lg-9 content">
            
<div class="container">           
  <table class="table table-striped">
    <thead>
      <tr>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><i class="fa fa-handshake-o" > Nama Barang</i></td>
        <td>Doe Doe Doe Doe Doe Doe Doe Doe</td>
      </tr>
      <tr>
        <td><i class="fa fa-clone" aria-hidden="true"> Kategori Barang</i></td>
        <td>Doe Doe Doe Doe Doe Doe Doe Doe</td>
      </tr>
      <tr>
        <td><i class="  fa fa-balance-scale" aria-hidden="true"> Harga Awal</i></td>
        <td>Doe Doe Doe Doe Doe Doe Doe Doe</td>
      </tr>
      <tr>
        <td><i class="  fa fa-hourglass-3" aria-hidden="true"> Durasi Lelang</i></td>
        <td>Doe Doe Doe Doe Doe Doe Doe Doe</td>
      </tr>
    </tbody>
  </table>
</div>

            <div class="padding-0 box-v4-alert">
              <p style="font-size: 16px"><b>Keterangan Barang : </b> barang ini masih bagus dan mulus bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6" style="background-color: #b5ffd6; padding: 15px; height: 300px">
            <div class="member"  >
              <div class="details">
                <h4 style="font-size: 25px">Terdapat<br>43 Pelelang</h4>
                <hr>
                <span style="font-size: 20px;color: red"><b>Rp 900.000</b></span>
                <span>Pelelang dengan penawaran harga tertinggi terakhir akan menjadi pembeli resmi</span>
              </div>
            </div>

            <a class="btn-get-started scrollto" style="color: #ffffff" href="#lelangBarangModal"data-toggle="modal">
            <div class="" style="background-color: #2e4ca5; height: 35px; border-radius: 3px; text-align: center; font-size: 16px; padding-top: 5px; margin-top: 10px">
              Lelang Barang
            </div>
            </a>

            

          </div>
        </div>

      </div>
      @include('pages.lelang.lelang')
    </section>

    <br>

   


    <!--==========================
      Clients Section
    ============================-->
    
  
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
@endsection
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>ITS-LELANG</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="templates/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="templates/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="templates/lib/animate/animate.min.css" rel="stylesheet">
    <link href="templates/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="templates/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="templates/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="templates/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="templates/css/style.css" rel="stylesheet">

    <!-- =======================================================
        Theme Name: Reveal
        Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
        Author: BootstrapMade.com
        License: https://bootstrapmade.com/license/
    ======================================================= -->
    </head>

    <body id="body">

    <!--==========================
        Header
    ============================-->
    <header id="header" >
        <div class="container">
            <div id="logo" class="pull-left">
                <h1><a href="#body" class="scrollto"><img src="img/icon.png">ITS-<span>LELANG</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        {{-- <li class="menu-active"><a href="#body">Beranda</a></li>
                        <li class="menu-has-children"><a href="#">Mahasiswa</a>
                            <ul>
                            <li><a href="loginfix/profilakun.html">Profil</a></li>
                            <li><a href="daftarpinjamanmhsb.html">Daftar Pinjaman</a></li>
                            <li><a href="beranda.html">Keluar</a></li>
                            </ul>
                        </li> --}}
                    @endguest
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->


    @yield('content')

    
    <!--==========================
        Footer
    ============================-->
    <footer id="footer">
        <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>ITS-LELANG</strong>. All Rights Reserved
        </div>
        
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="templates/lib/jquery/jquery.min.js"></script>
    <script src="templates/lib/jquery/jquery-migrate.min.js"></script>
    <script src="templates/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="templates/lib/easing/easing.min.js"></script>
    <script src="templates/lib/superfish/hoverIntent.js"></script>
    <script src="templates/lib/superfish/superfish.min.js"></script>
    <script src="templates/lib/wow/wow.min.js"></script>
    <script src="templates/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="templates/lib/magnific-popup/magnific-popup.min.js"></script>
    <script src="templates/lib/sticky/sticky.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
    <!-- Contact Form JavaScript File -->
    <script src="templates/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="templates/js/main.js"></script>

    </body>
</html>

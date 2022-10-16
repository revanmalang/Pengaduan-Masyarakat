<?php
include("auth.php"); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Revan">
    <title>APPM</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/2.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/LineIcons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">

  </head>
  <style>
         button {
         background-color: #1c87c9;
         border: none;
         color: white;
         padding: 20px 34px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 20px;
         margin: 4px 2px;
         cursor: pointer;
         }
      </style>
  <body>

    <!-- Header Section Start -->
    <header id="home" class="hero-area">    
      <div class="overlay">
        <span></span>
        <span></span>
      </div>
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <a href="index.html" class="navbar-brand"><h1 style="color: whitesmoke">APPM</h1></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          
        </div>
      </nav>  
      <div class="container">      
        <div class="row space-100">
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title">Hai, Selamat Datang Petugas</h2>
            
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 p-0">
            <div class="intro-img">
              <img src="img/holla.png" alt="">
            </div>            
          </div>
        </div> 
      </div>             
    </header>
    <!-- Header Section End --> 


   

    <section id="services" class="section">
        <div class="container">

          <h3 style="color:blueviolet"></h3>
  
          <div class="row">
            <!-- Start Col -->
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="services-item text-center">
               
                <p>Lihat Laporan Yang Dibuat Oleh Masyarakat</p>

                <button onclick="window.location.href = 'lihatlaporan.php';">Lihat Laporan</button>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="services-item text-center">
               
                <p>Berikan Tanggapan Untuk Laporan Yang Dibuat Masyarakat</p>

                <button onclick="window.location.href = 'tanggapan.php';">Berikan Tanggapan</button>
            </div>
            </div>
            <!-- End Col -->
          
            <!-- Start Col -->
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="services-item text-center">
                
                <p>Matikan Seluruh Sesi Akun Anda</p>
                <button onclick="window.location.href = 'logout.php';">Keluar</button>

              </div>
            </div>
            <!-- End Col -->
  
          </div>
        </div>
      </section>


    <footer>
      <section id="footer-Content">
        <div class="container">
          <!-- Start Row -->
          <div class="row">

          <!-- Start Col -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              
              <div class="footer-logo">
               <h1 style="color: whitesmoke">APPM</h1>
              </div>
            </div>
             <!-- End Col -->
              <!-- Start Col -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Judul Menu</h3>
                <ul class="menu">
                  <li><a href="#">  - Menu</a></li>
                  <li><a href="#">- Menu</a></li>
                  <li><a href="#">- Menu</a></li>
                  <li><a href="#">- Menu</a></li>
                </ul>
              </div>
            </div>
             <!-- End Col -->
              <!-- Start Col -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Judul Menu</h3>
                <ul class="menu">
                  <li><a href="#">  - Menu</a></li>
                  <li><a href="#">- Menu</a></li>
                  <li><a href="#">- Menu</a></li>
                  <li><a href="#">- Menu</a></li>
                  <li><a href="#">- Menu</a></li>
                </ul>
              </div>
            </div>
             <!-- End Col -->
              <!-- Start Col -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Judul Menu</h3>
                <ul class="menu">
                  <li><a href="#">  - Menu</a></li>
                  <li><a href="#">- Menu</a></li>
                  <li><a href="#">- Menu</a></li>
                  <li><a href="#">- Menu</a></li>
                  <li><a href="#">- Menu</a></li>
                </ul>
              </div>
            </div>
             <!-- End Col -->
           
          </div>
          <!-- End Row -->
        </div>
       
      </section>
      
    </footer>


    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a> 

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>      
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>     
    <script src="js/nivo-lightbox.js"></script>     
    <script src="js/jquery.magnific-popup.min.js"></script>      
    <script src="js/main.js"></script>
    
  </body>
</html>
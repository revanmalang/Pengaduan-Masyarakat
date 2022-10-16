
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
<?php
	require('db.php');
    if (isset($_REQUEST['nik'])){
		$nik = stripslashes($_REQUEST['nik']);
        $nik = mysqli_real_escape_string($con,$nik);
        
        $nama = stripslashes($_REQUEST['nama']);
		$nama = mysqli_real_escape_string($con,$nama);
        
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con,$username);
        
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        
     
        $query = "INSERT into `admin` (nik, nama, username, password) VALUES ('$nik', '$nama', '$username', '".md5($password)."')";
        $result = mysqli_query($con,$query);
        if($result){
            header ('location: masmin.php');
        }
    }else{
?>
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
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto w-100 justify-content-end">
          <li class="nav-item">
            <a class="nav-link page-scroll" href="index.html">Beranda</a>
          </li>
        
           
         
<li class="nav-item">
            <a class="nav-link page-scroll" href="masmin.php">Masuk</a>
          </li> 
         
        </ul>
      </div>
    </div>
  </nav>  
  <div class="container">      
    <div class="row space-100">
      <div class="col-lg-6 col-md-12 col-xs-12">
        <div class="contents">
          <h2 class="head-title">Hai, Selamat Datang Calon Admin<br>Aplikasi Pelaporan Pengaduan Masyarakat</h2>
         
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




<section id="contact" class="section">
    <!-- Container Starts -->
    <div class="container">
      <!-- Start Row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-text section-header text-center">  
            <div>   
              <h2 class="section-title">Register</h2>
              <div class="desc-text">
                <p>Sebelum Jadi Admin, Yuk Buat Akun Terlebih Dahulu</p>
              </div>
            </div> 
          </div>
        </div>

      </div>
      <!-- End Row -->
      <!-- Start Row -->
      <div class="row">
        <!-- Start Col -->
        <div class="col-lg-6 col-md-12">
        <form action="" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="number" class="form-control" id="nik" name="nik" placeholder="Masukan NIK Anda" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==16) return false;" required data-error="Silahkan Masukan Nik Anda">
                <div class="help-block with-errors"></div>
              </div>                                 
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" placeholder="Masukan Nama Anda" id="nama" class="form-control" name="nama" required data-error="Silahkan Masukan Nama Anda">
                <div class="help-block with-errors"></div>
              </div> 
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Nama Pengguna Anda" maxlength="14" required data-error="Silahkan Masukan Nama Pengguna Anda">
                <div class="help-block with-errors"></div>
              </div>                                 
            </div>
           
            <div class="col-md-6">
              <div class="form-group">
                <input type="password" placeholder="Masukan Kata Sandi Anda" id="password" class="form-control" name="password" required data-error="Please enter your Budget">
                <div class="help-block with-errors"></div>
              </div> 
            </div>
          
            <div class="col-md-12">
             
              <div class="submit-button">
                <button class="btn btn-common" id="submit" type="submit">Daftar</button>
                <div id="msgSubmit" class="h3 hidden"></div> 
                <div class="clearfix"></div> 
              </div>
            </div>
          </div>            
        </form>
        </div>
        <!-- End Col -->
        <!-- Start Col -->
        <div class="col-lg-1">
          
        </div>
        <!-- End Col -->
        <!-- Start Col -->
        <div class="col-lg-4 col-md-12">
          <div class="contact-img">
            <img src="img/keren.png" class="img-fluid" alt="">
          </div>
        </div>
        <!-- End Col -->
        <!-- Start Col -->
        <div class="col-lg-1">
        </div>
        <!-- End Col -->

      </div>
      <!-- End Row -->
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
<?php } ?>
</body>
</html>

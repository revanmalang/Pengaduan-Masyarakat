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
  
  <?php
	require('db.php');
    if (isset($_REQUEST['id_pengaduan'])){
		$id_pengaduan = stripslashes($_REQUEST['id_pengaduan']);
        $id_pengaduan = mysqli_real_escape_string($con,$id_pengaduan);
        
        $id_tanggapan = stripslashes($_REQUEST['id_tanggapan']);
		$id_tanggapan = mysqli_real_escape_string($con,$id_tanggapan);
        
        $id_petugas = stripslashes($_REQUEST['id_petugas']);
        $id_petugas = mysqli_real_escape_string($con,$id_petugas);
        
        $tgl_tanggapan = stripslashes($_REQUEST['tgl_tanggapan']);
        $tgl_tanggapan = mysqli_real_escape_string($con,$tgl_tanggapan);
        
        $tanggapan = stripslashes($_REQUEST['tanggapan']);
        $tanggapan = mysqli_real_escape_string($con,$tanggapan);
        
        $query = "INSERT into `tanggapan` (id_pengaduan, id_tanggapan, id_petugas, tgl_tanggapan, tanggapan) VALUES ('$id_pengaduan', '$id_tanggapan', '$id_petugas', '$tgl_tanggapan', '$tanggapan')";
        $result = mysqli_query($con,$query);
        if($result){
          header ('location: yeays.html');
        }
        else
        {
          header ('location: yeays.html');
       }

    }
    else
    {
  
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
             
             
            </ul>
          </div>
        </div>
      </nav> 
     
      <div class="container">      
        <div class="row space-100">
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title">Hai Petugas</h2>
			  <br>
			  

			  <div class="row">
             

</div>
	</div>
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

    <section id="contact" class="section">
        <!-- Container Starts -->
        <div class="container">
          <!-- Start Row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="contact-text section-header text-center">  
                <div>   
                  <h2 class="section-title">Buat Tanggapan</h2>
                  <div class="desc-text">
                    <p>Yuk Buat Tanggapan Untuk Laporan Masyarakat.</p>
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
           


              <div class="col-md-12">
                  <div class="form-group">
                    <input type="number" class="form-control" id="id_pengaduan" name="id_pengaduan" placeholder="Masukan ID Pengaduan " pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==16) return false;" required data-error="Silahkan Masukan ID Anda">
                    <div class="help-block with-errors"></div>
                  </div>                                 
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <input type="number" class="form-control" id="id_tanggapan" name="id_tanggapan" placeholder="Masukan ID Tanggapan" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==16) return false;" required data-error="Silahkan Masukan Nik Anda">
                    <div class="help-block with-errors"></div>
                  </div>                                 
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="number" placeholder="Masukan ID Petugas" id="id_petugas" class="form-control" name="id_petugas" required data-error="Silahkan Masukan Nama Anda">
                    <div class="help-block with-errors"></div>
                  </div> 
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="date" class="form-control" id="tgl_tanggapan" name="tgl_tanggapan" placeholder="Nama Pengguna Anda" required data-error="Silahkan Masukan Nama Pengguna Anda">
                    <div class="help-block with-errors"></div>
                  </div>                                 
                </div>
               
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea type="text" placeholder="Masukan Tanggapan Anda" id="tanggapan" class="form-control" name="tanggapan" required data-error="Please enter your Budget"></textarea>
                    <div class="help-block with-errors"></div>
                  </div> 
                </div>
               
                 
                  <div class="submit-button">
                    <button class="btn btn-common" id="submit" type="submit">Kirim</button>
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
           
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-1">
            </div>
            <!-- End Col -->
  
          </div>
          <!-- End Row -->
        </div>
      </section>




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
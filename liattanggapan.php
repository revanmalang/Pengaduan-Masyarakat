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
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #2980b9;
  color: white;
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

		  <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto w-100 justify-content-end">

          <li class="nav-item">
            <a class="nav-link page-scroll" href="indexmasyarakat.php">Dashboard</a>
          </li>
        
           
         
<li class="nav-item">
            <a class="nav-link page-scroll" href="logout.php">Keluar</a>
          </li> 
         
        </ul>
      </div>
         
        </div>
      </nav>  
      <div class="container">      
        <div class="row space-100">
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="contents">
              <p>DAFTAR TANGGAPAN</p>
             
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
		<table width='80%' border=1>
		<tr>
			<th>N0</th>
			<th>ID Pengaduan</th>
			<th>ID Tanggapan</th>
			<th>Tgl Laporan Ditanggapi</th>
			<th>Tanggapan</th>
		</tr>

		

		<?php 
		include 'db.php';
		$no = 1;
    $data = mysqli_query($con,"select * from tanggapan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
        <td><?php echo $d['id_pengaduan']; ?></td>
				<td><?php echo $d['id_tanggapan']; ?></td>
				<td><?php echo $d['tgl_tanggapan']; ?></td>
				<td style="word-wrap:break-word; word-break:break-all"><?php echo $d['tanggapan']; ?></td>
       
				
			</tr>
			<?php 
		}
		?>
	</table>
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
    <script>
    $(document).ready(function(){

// Delete 
$('.delete').click(function(){
  var el = this;
  var id = this.id;
  var splitid = id.split("_");

  // Delete id
  var deleteid = splitid[1];

  // AJAX Request
  $.ajax({
    url: 'remove.php',
    type: 'POST',
    data: { id:deleteid },
    success: function(response){

      if(response == 1){
  // Remove row from HTML Table
  $(el).closest('tr').css('background','tomato');
  $(el).closest('tr').fadeOut(800,function(){
     $(this).remove();
  });
     }else{
  alert('Invalid ID.');
     }

   }
  });

});

});

    </script>
  </body>
</html>
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
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `petugas` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: dashgas.php"); // Redirect user to index.php
            }else{
				echo "<center><br><br><br><br><br><br><br><div class='form'><h2>Ups Nama Pengguna / Kata Sandi Anda Salah.</h2>
				
				<br/>
				
				
				<a href='masgas.php'>Klik Disini</a> Untuk Mencoba Kembali
				
				</div>
				
				</center>";
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
             
             
            </ul>
          </div>
        </div>
      </nav> 
     
      <div class="container">      
        <div class="row space-100">
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title">Hai Petugas, Silahkan Masuk</h2>
			  <br>
			  

			  <div class="row">
             
<div class="form">
<form action="" method="post" name="login">

<div class="col-md-12">
                  <div class="form-group">
                    <input type="text" placeholder="Nama Pengguna Pengguna" id="username" class="form-control" name="username" required data-error="Silahkan Masukan Nama Pengguna Anda">
                    <div class="help-block with-errors"></div>
                  </div> 
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi Anda" required data-error="Silahkan Masukan Kata Sandi Anda">
                    <div class="help-block with-errors"></div>
                  </div>                                 
				</div>
				<div class="col-md-12">
                 
				 <div class="submit-button">
				   <button class="btn btn-common" id="submit" type="submit">Masuk</button>
				   <div id="msgSubmit" class="h3 hidden"></div> 
				   <div class="clearfix"></div> 
				 </div>
			   </div>
</form>
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
    <!-- Header Section End --> 



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
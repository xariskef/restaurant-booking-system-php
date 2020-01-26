<?php
// Initialize the session
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location:errors/index.html");
							exit();
}
?>
 

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Risotto</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700%7CCabin:400%7CDancing+Script" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

    </head>
	<body>

		<!-- Header -->
		<header id="header">

			<!-- Top nav -->
			<div id="top-nav">
				<div class="container">

				<!-- logo -->
				<div class="logo">
					<a href="index.html"><img src="./img/logo.png" alt="logo"></a>
				</div>
				<!-- logo -->

				<!-- Mobile toggle -->
				<button class="navbar-toggle">
					<span></span>
				</button>
				<!-- Mobile toggle -->

				<!-- social links -->
				<ul class="social-nav">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
				<!-- /social links -->

				</div>
			</div>
			<!-- /Top nav -->

			<!-- Bottom nav -->
			<div id="bottom-nav">
				<div class="container">
				<nav id="nav">

					<!-- nav -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="index.php#home">Home</a></li>
						<li><a href="index.php#about">About</a></li>
						<li><a href="index.php#menu">Menu</a></li>
						<li><a href="index.php#reservation">Reservation</a></li>
						<li><a href="index.php#events">Events</a></li>
						<li><a href="index.php#contact">Contact</a></li>
					</ul>
					<!-- /nav -->

					
					<!-- button nav -->

<?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	echo'<ul class="cta-nav">
						<li><a href="validate/login.php" class="btn btn-success btn-xs">Login</a></li>
						<li><a href="validate/register.php" class="btn btn-info btn-xs">Sign up</a></li>
						
					</ul>';
}else{
	
    echo '<ul class="cta-nav">
        <li>Hi, <b>';echo htmlspecialchars($_SESSION["username"]); echo'</b><a href="admin/index.php"><span class="fa fa-home fa-2x"></a></span></li><br>
		<li><a href="validate/logout.php" class="btn btn-danger btn-xs">Logout</a></li>
        <li><a href="validate/reset-password.php" class="btn btn-warning btn-xs">Pass reset</a></li>
        
    </ul> ';
    
}
?>


					<!-- contact nav -->
					<ul class="contact-nav nav navbar-nav">
						<li><a href="tel: 2105689231"><i class="fa fa-phone"></i> 210-5689231</a></li>
						<li><a href="#contact"><i class="fa fa-map-marker"></i> Leof. Posidonos 26</a></li>
					</ul>
					<!-- contact nav -->

				</nav>
				</div>
			</div>
			<!-- /Bottom nav -->


		</header>
		<!-- /Header -->

<br><br>
<br><br>
<br><br>
		<!-- About -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div id="1" class="row">

					<!-- section header -->
					<div class="section-header text-center">
						<h4 class="sub-title">User Account</h4>
						<h2 class="title">Here you can see all your reservations</h2>
					</div>
					<!-- /section header -->
<div class="card card-outline-secondary center">
					<!-- about content -->
					<div class="col-md">
						<h4 class="lead">Reservations</h4>
					</div>
					<!-- /about content -->

					<!-- about content -->
					<!-- card -->
        
          
		  <div class="card-body">
		  <?php
		           include'includes/dbconn.inc.php';
				   $user_email=$_SESSION['email'];
				   $user_email=mysqli_real_escape_string($conn,$user_email);
                   $sql = "SELECT * FROM reservation WHERE email='$user_email';";
                   $result = mysqli_query($conn, $sql);
                   $resultCheck = mysqli_num_rows($result);
				   
		   
		   
		   if($resultCheck > 0){
	         while($row = mysqli_fetch_assoc($result)){
		  
         echo '
            <p><b>Email: '.$row['email'].'  Username: '.$row['name'].'  Phone: '.$row['phone'].'</b></p>
			<p>'.$row['tables'].' Tables for '.$row['person'].' people on '.$row['date'].' at '.$row['time'].'</p>
            <small class="text-muted">Created on : '.$row['done_on'].'</small>
            <hr>
            ';
			 }
		   }
		?> 
		
		</div>
        </div>
        <!-- /.card -->
					<!-- /about content -->

					<!-- Galery Slider -->
					<div class="col-md-12">
						<div id="galery" class="owl-carousel owl-theme">

							<!-- single column -->
							<div class="galery-item">

								<!-- single image -->
								<div class="galery-img" style="background-image:url(./img/image01.jpg)"></div>
								<!-- /single image -->

							</div>
							<!-- single column -->

							<!-- single column -->
							<div class="galery-item">

								<!-- single image -->
								<div class="galery-img" style="background-image:url(./img/image02.jpg)"></div>
								<!-- /single image -->

								<!-- single image -->
								<div class="galery-img" style="background-image:url(./img/image03.jpg)"></div>
								<!-- /single image -->

							</div>
							<!-- single column -->

							<!-- single column -->
							<div class="galery-item">

								<div class="item-column">
									<!-- single image -->
									<div class="galery-img" style="background-image:url(./img/image04.jpg)"></div>
									<!-- /single image -->

									<!-- single image -->
									<div class="galery-img" style="background-image:url(./img/image05.jpg)"></div>
									<!-- /single image -->
								</div>

								<div class="item-column">
									<!-- single image -->
									<div class="galery-img" style="background-image:url(./img/image06.jpg)"></div>
									<!-- /single image -->

									<!-- single image -->
									<div class="galery-img" style="background-image:url(./img/image07.jpg)"></div>
									<!-- /single image -->
								</div>

							</div>
							<!-- /single column -->

						</div>
					</div>
					<!-- /Galery Slider -->


				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /About -->

		<!-- Footer -->
		<footer id="footer">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- copyright -->
					<div class="col-md-6">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<span class="copyright">Copyright @2019 All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="
						#" target="_blank">ThanXen</a></span>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /copyright -->

					<!-- footer nav -->
					<div class="col-md-6">
						<nav class="footer-nav">
							<a href="#home">Home</a>
						<a href="#about">About</a>
						<a href="#menu">Menu</a>
						<a href="#reservation">Reservation</a>
						<a href="#events">Events</a>
						<a href="#contact">Contact</a>
						</nav>
					</div>
					<!-- /footer nav -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->

		<!-- Preloader -->
		<div id="preloader">
			<div class="preloader">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<!-- /Preloader -->

		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	
		<script type="text/javascript" src="js/main.js"></script>

	</body>
</html>

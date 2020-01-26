<?php
// Initialize the session
session_start();

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
						<li><a href="#home">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#menu">Menu</a></li>
						<li><a href="#reservation">Reservation</a></li>
						<li><a href="#events">Events</a></li>
						<li><a href="#contact">Contact</a></li>
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
        <li>Hi, <b>';echo htmlspecialchars($_SESSION["username"]); echo'</b><a href="user_account.php"><span class="fa fa-home fa-2x"></a></span></li><br>
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

		<!-- Home -->
		<div id="home" class="banner-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/background02.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">

				<div class="col-md-10 col-md-offset-1 text-center">
					<div class="home-content">
						<h1 class="white-text">Welcome To Risotto Restaurant</h1>
						<h4 class="white-text lead">Nec solet elaboraret eu, ea usu vidit accusam. Ea per legimus singulis percipitur. Graecis ullamcorper nec ex, vix euismod detraxit voluptaria at.</h4>
						<a class="main-button" href="#menu">Discover Menu</a>
					</div>
				</div>

			</div>

		</div>
		<!-- /Home -->

		<!-- About -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div id="1" class="row">

					<!-- section header -->
					<div class="section-header text-center">
						<h4 class="sub-title">About Us</h4>
						<h2 class="title">The Risotto Restaurant</h2>
					</div>
					<!-- /section header -->

					<!-- about content -->
					<div class="col-md-5">
						<h4 class="lead">Welcome to Risotto Restaurant. Since 1988, Offering Traditional Dishes of the highest quality.</h4>
					</div>
					<!-- /about content -->

					<!-- about content -->
					<div class="col-md-7">
						<p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum. Oblique conclusionemque qui cu, eum no sonet putant. Eos cu nulla vidisse. Mazim oporteat eam ex, his ei audiam audire, affert corrumpit pri cu.</p>
					</div>
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


		<!-- Menu -->
		<div id="menu" class="section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/background01.jpg)"></div>
			<!-- /Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="section-header text-center">
						<h4 class="sub-title">Discover</h4>
						<h2 class="title white-text">Our Menu</h2>
					</div>

					<!-- menu nav -->
					<ul class="menu-nav">
					  <li class="active"><a data-toggle="tab" href="#menu1">Dinner</a></li>
					  <li><a data-toggle="tab" href="#menu1">Drinks</a></li>
					  <li><a data-toggle="tab" href="#menu1">Launch</a></li>
					  <li><a data-toggle="tab" href="#menu1">Dessert</a></li>
					</ul>
					<!-- /menu nav -->

					<!-- menu content -->
					<div id="menu-content" class="tab-content">

						<!-- menu1 -->
						<div id="menu1" class="tab-pane fade in active">
							<div class="col-md-6">

								<!-- single dish -->
								<div class="single-dish">
									<div class="single-dish-heading">
										<h4 class="name">Basted Rhubarb Mussels</h4>
										<h4 class="price">57£</h4>
									</div>
									<p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
								</div>
								<!-- /single dish -->

								<!-- single dish -->
								<div class="single-dish">
									<div class="single-dish-heading">
										<h4 class="name">Steamed Chili Moussaka</h4>
										<h4 class="price">145£</h4>
									</div>
									<p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
								</div>
								<!-- /single dish -->

								<!-- single dish -->
								<div class="single-dish">
									<div class="single-dish-heading">
										<h4 class="name">Blanched Fennel & Orange Lasagna</h4>
										<h4 class="price">79£</h4>
									</div>
									<p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
								</div>
								<!-- /single dish -->

								<!-- single dish -->
								<div class="single-dish">
									<div class="single-dish-heading">
										<h4 class="name">Slow-Cooked Basil & Lime Ostrich</h4>
										<h4 class="price">57£</h4>
									</div>
									<p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
								</div>
								<!-- /single dish -->

								<!-- single dish -->
								<div class="single-dish">
									<div class="single-dish-heading">
										<h4 class="name">Stuffed Oregano Chicken</h4>
										<h4 class="price">145£</h4>
									</div>
									<p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
								</div>
								<!-- /single dish -->

							</div>

							<div class="col-md-6">

								<!-- single dish -->
								<div class="single-dish">
									<div class="single-dish-heading">
										<h4 class="name">Pressure-Fried Asparagus Chicken</h4>
										<h4 class="price">57£</h4>
									</div>
									<p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
								</div>
								<!-- /single dish -->

								<!-- single dish -->
								<div class="single-dish">
									<div class="single-dish-heading">
										<h4 class="name">Tenderized Egg & Coconut Duck</h4>
										<h4 class="price">87£</h4>
									</div>
									<p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
								</div>
								<!-- /single dish -->

								<!-- single dish -->
								<div class="single-dish">
									<div class="single-dish-heading">
										<h4 class="name">Milk Chocolate Gingerbread</h4>
										<h4 class="price">155£</h4>
									</div>
									<p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
								</div>
								<!-- /single dish -->

								<!-- single dish -->
								<div class="single-dish">
									<div class="single-dish-heading">
										<h4 class="name">Simmered Mango & Pine Rabbit</h4>
										<h4 class="price">57£</h4>
									</div>
									<p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
								</div>
								<!-- /single dish -->

								<!-- single dish -->
								<div class="single-dish">
									<div class="single-dish-heading">
										<h4 class="name">Red Wine Surprise</h4>
										<h4 class="price">87£</h4>
									</div>
									<p>te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</p>
								</div>
								<!-- /single dish -->

							</div>

						</div>
						<!-- /menu1 -->

					</div>
					<!-- /menu content -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Menu -->

		<!-- Reservation -->
		<div id="reservation" class="section">

			<!-- Backgound Image -->
			<div class="bg-image" style="background-image:url(./img/background03.jpg)"></div>
			<!-- /Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- reservation form -->
					<div class="col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1">
						<form action="includes/reservation.inc.php" method="POST" class="reserve-form row">
							<div class="section-header text-center">
								<h4 class="sub-title">Reservation</h4>
								<h2 class="title white-text">Book Your Table</h2>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="name">Name:</label>
									<input name="name" class="input" type="text" placeholder="Name" id="name">
								</div>
								<div class="form-group">
									<label for="phone">Phone:</label>
									<input name="phone" class="input" type="text" placeholder="Phone" id="phone">
								</div>
								<div class="form-group">
									<label for="date">Date:</label>
									<input name="date" class="input" type="date" placeholder="MM/DD/YYYY" id="date">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="email">Email:</label>
									<input name="email" class="input" type="text" placeholder="Email" id="email">
								</div>
								<div class="form-group">
									<label for="number">Number of Guests:</label>
									<select name="people" class="input" id="number" type="number">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										<option>11</option>
										<option>12</option>
									</select>
								</div>
								<div class="form-group">
								  <label for="time">Time:</label>
								  <select class="input"  type="text" name="time" required>
											<option>7:00</option>
											<option>7:15</option>
											<option>7:30</option>
											<option>7:45</option>
											<option>8:00</option>
											<option>8:15</option>
											<option>8:30</option>
											<option>8:45</option>
											<option>9:00</option>
											<option>9:15</option>
											<option>9:30</option>
											<option>9:45</option>
											<option>10:00</option>
											<option>10:15</option>
											<option>10:30</option>
											<option>10:45</option>
											<option>11:00</option>
											<option>11:15</option>
											<option>11:30</option>
										</select>
								</div>
							</div>

							<div class="col-md-12 text-center">
								<button type="submit" name="signup-submit" class="main-button">Book Now</button>
							</div>

						</form>
					</div>
					<!-- /reservation form -->

					<!-- opening time -->
					<div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1">
						<div class="opening-time row">
							<div class="section-header text-center">
								<h2 class="title white-text">Opening Time</h2>
							</div>
							<?php
                   include'includes/dbconn.inc.php';
                   $sql = "SELECT * FROM open;";
                   $result = mysqli_query($conn, $sql);
                   $resultCheck = mysqli_num_rows($result);
				   $row = mysqli_fetch_assoc($result);?>							
							<ul>
								<li>
									<h4 class="day">Sunday</h4>
									<h4 class="hours"><?php echo $row['sunday'] ;?></h4>
								</li>
								<li>
									<h4 class="day">Monday</h4>
									<h4 class="hours"><?php echo $row['monday'] ;?></h4>
								</li>
								<li>
									<h4 class="day">Tuesday</h4>
									<h4 class="hours"><?php echo $row['tuesday'] ;?></h4>
								</li>
								<li>
									<h4 class="day">Wednesday</h4>
									<h4 class="hours"><?php echo $row['wednesday'] ;?></h4>
								</li>
								<li>
									<h4 class="day">Thursday</h4>
									<h4 class="hours"><?php echo $row['thursday'] ;?></h4>
								</li>
								<li>
									<h4 class="day">Friday</h4>
									<h4 class="hours"><?php echo $row['friday'] ;?></h4>
								</li>
								<li>
									<h4 class="day">Saturday</h4>
									<h4 class="hours"><?php echo $row['saturday'] ;?></h4>
								</li>
							</ul>
						</div>
					</div>
					<!-- /opening time -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Reservation -->

		<!-- Events -->
		<div id="events" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- section header -->
					<div class="section-header text-center">
						<h4 class="sub-title">Special Event</h4>
						<h2 class="title">Upcoming Event</h2>
					</div>
					<!-- /section header -->

					<!-- single event -->
					<div class="col-md-6">
						<div class="event">
							<div class="event-img">
								<img src="./img/event01.jpg" alt="">
								<div class="event-day">
									<span>08<br>July</span>
								</div>
							</div>
							<div class="event-content">
								<p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
								<h3><a href="#">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
								<p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
							</div>
						</div>
					</div>
					<!-- /single event -->

					<!-- single event -->
					<div class="col-md-6">
						<div class="event">
							<div class="event-img">
								<img src="./img/event02.jpg" alt="">
								<div class="event-day">
									<span>08<br>July</span>
								</div>
							</div>
							<div class="event-content">
								<p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
								<h3><a href="#">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
								<p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
							</div>
						</div>
					</div>
					<!-- /single event -->

					<!-- single event -->
					<div class="col-md-6">
						<div class="event">
							<div class="event-img">
								<img src="./img/event02.jpg" alt="">
								<div class="event-day">
									<span>08<br>July</span>
								</div>
							</div>
							<div class="event-content">
								<p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
								<h3><a href="#">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
								<p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
							</div>
						</div>
					</div>
					<!-- /single event -->

					<!-- single event -->
					<div class="col-md-6">
						<div class="event">
							<div class="event-img">
								<img src="./img/event01.jpg" alt="">
								<div class="event-day">
									<span>08<br>July</span>
								</div>
							</div>
							<div class="event-content">
								<p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
								<h3><a href="#">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
								<p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
							</div>
						</div>
					</div>
					<!-- /single event -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Events -->

		<!-- Contact -->
		<div id="contact" class="section">
         
		 <div class="col-md-6 col-md-offset-1" id="maps">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25189.87678061226!2d23.720670568464456!3d37.88988899689637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1be6a9feca745%3A0x400bd2ce2b97960!2sElliniko!5e0!3m2!1sen!2sgr!4v1553880285017!5m2!1sen!2sgr" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
			        </div>
			<!-- /map -->
		 
			<!-- container -->
			<div class="container" id="row" >

				<!-- row -->
				<div class="row" >

					<div  class="col-md-6 col-md-offset-1">
					
					
					
						<div class="section-header">
							<h4 class="sub-title">Contact Us</h4>
							<h2 class="title">Get In Touch</h2>
						</div>
						<div class="contact-content">
							<p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
							<h3>Tel: <a href="#">210-5689231</a></h3>
							<p>Address:     Leof. Posidonos 26</p>
							<p>Email: <a href="#">info@risotto.com</a></p>
							<ul class="list-inline">
								<li><p>Follow Us:</p></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
			
						</div>
					</div>
					

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->
                  
		
		</div>
		<!-- Contact -->

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

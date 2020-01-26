<?php 
// Initialize the session
session_start();
//if session!=admin-> header -> error 404
if(!isset($_SESSION["admin_loggedin"]) || $_SESSION["admin_loggedin"] !== true){
	header("location:../errors/index.html");
							exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-item.css" rel="stylesheet">

</head>

<body>
<?php require_once('includes/header.php'); ?>
  

  <!-- Page Content -->
  <div class="container">

    <div class="row">
<!--form -->
      <div class="col-lg-6">
	  <div class="modal-header info-color white-text">
            <h4 class="title">
                <i class="fa fa-pencil-alt"></i> Make a reservation</h4>
        </div>
        <div class="col-md-10 col-md-offset-10 col-sm-10 col-sm-offset-10">
						<form action="includes/reservation.inc.php" method="POST" class="reserve-form row">
						
							<div class="col-md-9">
								<div class="form-group">
									<label for="name">Name:</label>
									<input name="name" class="form-control form-control-sm" type="text" placeholder="Name" id="name" required>
								</div>
								<div class="form-group">
									<label for="phone">Phone:</label>
									<input name="phone" class="form-control form-control-sm"  type="text" placeholder="Phone" id="phone" required>
								</div>
								<div class="form-group">
									<label for="date">Date:</label>
									<input name="date" class="form-control form-control-sm"  type="date" placeholder="MM/DD/YYYY" id="date" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="email">Email:</label>
									<input name="email" class="form-control form-control-sm"  type="text" placeholder="Email" id="email" required>
								</div>
								<div class="form-group">
									<label for="number">Number of Guests:</label>
									<select name="people" class="form-control form-control-sm"  id="number" type="number"required>
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
								       <select class="form-control form-control-sm"  type="text" name="time" required>
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
      </div>
	  <!-- /form-->
	  <!-- /reservation search-->
	       <div class="col-lg-6">
	  <div class="modal-header info-color white-text">
            <h4 class="title">
                <i class="fa fa-pencil-alt"></i> Search for reservations</h4>
        </div>
        <div class="col-md-10 col-md-offset-10 col-sm-10 col-sm-offset-10">
						<form action="includes/reservation_search.php" method="GET" class="reserve-form row">
								<div class="form-group">
									<label for="date">Date:</label>
									<input name="date_search" class="form-control form-control-sm"  type="date" placeholder="MM/DD/YYYY" id="date">
								</div>
							</div>
							<div class="col-md-12 text-center">
								<button type="submit" name="search" class="main-button">Search</button>
							</div>

						</form>
					</div>
      </div>

<!-- card -->
        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Reservations
          </div>
		  <div class="card-body">
		  <?php
		           include'includes/dbconn.inc.php';
				   
                   $sql = "SELECT * FROM reservation ORDER BY reservation_id DESC;";
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

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; ThanXen 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

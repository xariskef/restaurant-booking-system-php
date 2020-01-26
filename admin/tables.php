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
<!--set general available -->
      <div class="col-lg-6">
	  <div class="modal-header info-color white-text">
            <h4 class="title">
                <i class="fa fa-pencil-alt"></i> Set the general availabillity</h4>
        </div>
        <div class="col-md-10 col-md-offset-10 col-sm-10 col-sm-offset-10">
						<form action="includes/gen_tables.php" method="POST" class="reserve-form row">
						
							<div class="col-md-9">
								<div class="form-group">
									<label for="number">Number of Tables:</label>
									<input name="table" class="form-control form-control-sm"  id="number" type="number"required>
								</div>
								
								<div class="form-group">
									<label for="number">Number of Chairs:</label>
									<input name="chair" class="form-control form-control-sm"  id="number" type="number"required>
								</div>
							</div>

							<div class="col-md-12 text-center">
								<button type="submit" name="set_aval" class="main-button">Save</button>
							</div>

						</form>
					</div>
      </div>
	  <!-- /form-->
	  <!-- general aval-->
	      <div class="col-sm-6">    
				 <h3>Updated general table availabillity</h3>
				 <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
<?php
                   include'includes/dbconn.inc.php';
                   $sql = "SELECT * FROM tables WHERE date='null';";
                   $result = mysqli_query($conn, $sql);
                   $resultCheck = mysqli_num_rows($result);
 
         
	         while($row = mysqli_fetch_assoc($result)){
            	  echo "<ul><li class='form-control form-control-sm' >Tables: ".$row['tables']."</li>";
				  echo "<li class='form-control form-control-sm' >Chairs: ".$row['chairs']."</li>";
				  	  
		           }
                  
                  ?>	
  </div>
  </div>
					
					<!-- /gen aval-->
      </div>


      </div>
      <!-- /.col-lg-9 -->

    </div>
<br><br>
<br><br>
  </div>
  <!-- /.container -->

<!-- Page Content -->
  <div class="container">

    <div class="row">
<!--availabillity per day-->
      <div class="col-lg-6">
	  <div class="modal-header info-color white-text">
            <h4 class="title">
                <i class="fa fa-pencil-alt"></i> Set the availabillity per day</h4>
        </div>
        <div class="col-md-10 col-md-offset-10 col-sm-10 col-sm-offset-10">
						<form action="includes/aval_tables.php" method="POST" class="reserve-form row">
						
							<div class="col-md-9">
								<div class="form-group">
									<label for="number">Number of Tables:</label>
									<input name="table_day" class="form-control form-control-sm"  id="number" type="number"required>
								</div>
								
								<div class="form-group">
									<label for="number">Number of Chairs:</label>
									<input name="chair_day" class="form-control form-control-sm"  id="number" type="number"required>
								</div>
								
								<div class="form-group">
									<label for="number">Date:</label>
									<input name="date" class="form-control form-control-sm"  id="number" type="date"required>
								</div>
							</div>

							<div class="col-md-12 text-center">
								<button type="submit" name="signup-submit" class="main-button">Save</button>
							</div>

						</form>
					</div>
      </div>
	  <!-- /aval per day-->
	  <!-- availabillity search-->
	       <div class="col-lg-6">
	  <div class="modal-header info-color white-text">
            <h4 class="title">
                <i class="fa fa-pencil-alt"></i> Search for availabillity</h4>
        </div>
        <div class="col-md-10 col-md-offset-10 col-sm-10 col-sm-offset-10">
						<form action="includes/availabillity.php" method="GET" class="reserve-form row">
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


      </div>
      <!-- /.col-lg-9 -->

    </div>
<br><br>
<br><br>
  </div>

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

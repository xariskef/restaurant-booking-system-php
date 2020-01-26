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

	  <!-- card -->
        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Users
          </div>
		  <div class="card-body">
		  <?php
		           include'includes/dbconn.inc.php';
				   
                   $sql = "SELECT * FROM users ORDER BY id DESC;";
                   $result = mysqli_query($conn, $sql);
                   $resultCheck = mysqli_num_rows($result);
		   
		   
		   if($resultCheck > 0){
	         while($row = mysqli_fetch_assoc($result)){
		  
         echo '
            <p>Email: '.$row['email'].'  Username: '.$row['username'].'  id: '.$row['id'].'</p>
            <small class="text-muted">Created on : '.$row['created_at'].'</small>
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

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
  
<br><br>
  <!-- Page Content -->
  <div class="container">

    <div class="row">
	<!--form -->
 <div class="col-sm-6">           
              <form id="orario" action="includes/open.php" method="post" class="wrap-form-reservation size22 m-l-r-auto">   
				 <h3>Change opening times</h3>
				 
				 
				 <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                  <!-- Select2 -->
               
			    Monday: <input type="text" value="17:00 pm -23:45 pm" class="form-control form-control-sm" name="monday"><br>
			    Tuesday:<input type="text" value="17:00 pm -23:45 pm" class="form-control form-control-sm" name="tuesday"><br>
		    	Wednesday:<input type="text" value="17:00 pm -23:45 pm" class="form-control form-control-sm" name="wednesday"><br>
			    Thursday:<input type="text" class="form-control form-control-sm" value="17:00 pm -23:45 pm" name="thursday"><br>
			    Friday:<input class="form-control form-control-sm" type="text" value="17:00 pm -23:45 pm" name="friday"><br>
				Saturday:<input type="text" class="form-control form-control-sm" value="17:00 pm -23:45 pm" name="saturday"><br>
				Sunday:<input class="form-control form-control-sm" type="text" value="17:00 pm -23:45 pm" name="sunday"><br>
			  
			  <button type="submit">
                Save
              </button>
				  
				  
				 </form>
				 
          </div>
      
    </div>
	<!--/form -->
	<!--hours -->
	 <div class="col-sm-6">    
				 <h3>Updated opening times</h3>
				 <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
<?php
                   include'includes/dbconn.inc.php';
                   $sql = "SELECT * FROM open;";
                   $result = mysqli_query($conn, $sql);
                   $resultCheck = mysqli_num_rows($result);
 
         
	         while($row = mysqli_fetch_assoc($result)){
            	  echo "<ul><li class='form-control form-control-sm' >Monday: ".$row['monday']."</li>";
				  echo "<li class='form-control form-control-sm' >Tuesday: ".$row['tuesday']."</li>";
				  echo "<li class='form-control form-control-sm' >Wednesday: ".$row['wednesday']."</li>";
				  echo "<li class='form-control form-control-sm' >Thursday: ".$row['thursday']."</li>";
				  echo "<li class='form-control form-control-sm' >Friday: ".$row['friday']."</li>";
				  echo "<li class='form-control form-control-sm' >Saturday: ".$row['saturday']."</li>";
		          echo "<li class='form-control form-control-sm' >Sunday: ".$row['sunday']."</li></ul>";		  
		           }
                  
                  ?>	
  </div>
  </div>
  <!--hours -->
  </div>
  <!-- /.container -->
<br>
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

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include'dbconn.inc.php';
  
  
  
$table = $_POST['table'];
$chair = $_POST['chair'];



  $sql = "UPDATE tables SET tables='$table',chairs='$chair' WHERE date='null' ;";
 mysqli_query($conn, $sql);
  
  
  
header("Location: ../tables.php?save=success");
}else{
	
   // die("Connection failed: " . mysqli_connect_error());
	header("location:../../errors/index.html");
							exit();
}
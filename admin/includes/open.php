<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include'dbconn.inc.php';

$monday = $_POST['monday'];
$tuesday = $_POST['tuesday'];
$wednesday = $_POST['wednesday'];
$thursday= $_POST['thursday'];
$friday = $_POST['friday'];
$saturday = $_POST['saturday'];
$sunday = $_POST['sunday'];

$sql = "UPDATE open SET monday='$monday', tuesday='$tuesday', wednesday='$wednesday', 
  thursday='$thursday', friday='$friday', saturday='$saturday', sunday='$sunday' ;";
 mysqli_query($conn, $sql);



header("Location: ../open.php?save=success");
}else{
	
   // die("Connection failed: " . mysqli_connect_error());
	header("location:../../errors/index.html");
							exit();
}
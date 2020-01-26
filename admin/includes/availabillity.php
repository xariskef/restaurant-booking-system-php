<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
  include'dbconn.inc.php';
  $date = $_GET['date_search'];
  
 $dates=mysqli_real_escape_string($conn,$date);
 $sql = "SELECT * FROM tables WHERE date='$dates'";
                   $result = mysqli_query($conn, $sql);
                   $resultCheck = mysqli_num_rows($result);
	              $row = mysqli_fetch_assoc($result);
					$aval_date=$row['date'];
					 $aval_tables=$row['tables'];
					 $aval_chairs=$row['chairs'];
					

            
             $sql_date = "SELECT * FROM tables WHERE date='null' ;";
             $result_date = mysqli_query($conn, $sql_date);
             $resultCheck_date = mysqli_num_rows($result_date);
	         $row_date = mysqli_fetch_assoc($result_date);
			$tables=$row_date['tables'];
		    $chairs=$row_date['chairs'];





	if($date==$aval_date){
		
	$message = "The availability for ".$date. " is ".$aval_tables." tables and ".$aval_chairs." chairs ";
	echo "<script type='text/javascript'>alert('$message');
	       window.location.href='../tables.php';
	    </script>";
	}else{
		$message = "The availability for " .$date. " is ".$tables." tables and ".$chairs." chairs ";
	echo "<script type='text/javascript'>alert('$message');
	       window.location.href='../tables.php';
	    </script>";
	}
	
	
	

					 
    

}else{
	
   // die("Connection failed: " . mysqli_connect_error());
	header("location:../../errors/index.html");
							exit();
}
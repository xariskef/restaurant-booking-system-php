<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include'dbconn.inc.php';
  
  
$table_day = $_POST['table_day'];
$chair_day = $_POST['chair_day'];
$date = $_POST['date'];
  
                  $aval_date=mysqli_real_escape_string($conn,$date);
                  $sql_query = "SELECT date FROM tables WHERE date='$aval_date' ;";
                   $result_query = mysqli_query($conn, $sql_query);
                   $resultCheck_result = mysqli_num_rows($result_query);
	               $row_aval = mysqli_fetch_assoc($result_query);
				   $aval_table_date = $row_aval['date'];
                 

			 if ($aval_table_date==null){
				       $sql_day = "INSERT INTO tables(tables, chairs, date)
    VALUES ('$table_day', '$chair_day', '$date');";
 mysqli_query($conn, $sql_day);
 echo "<script type='text/javascript'>
					 alert('The change has been successfull!!!  $table_day tables and $chair_day chairs on $date');
                    window.location.href='../tables.php';
					 </script>";
					  
				   }else
				   {$sql = "UPDATE tables SET tables='$table_day',chairs='$chair_day' WHERE date='$aval_date' ;";
				   mysqli_query($conn, $sql);
                     echo "<script type='text/javascript'>
					 alert('The updated successfully the availability!!!  $table_day tables and $chair_day chairs on $date');
                    window.location.href='../tables.php';
					 </script>";
}
  
  
  
  
header("Location: ../tables.php?save=success");
}else{
	
   // die("Connection failed: " . mysqli_connect_error());
	header("location:../../errors/index.html");
							exit();
}
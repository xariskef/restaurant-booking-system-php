<?php
include 'dbconn.inc.php';
if (isset($_POST['signup-submit'])) {
	

  $username = $_POST['name'];
  $phone = $_POST['phone'];
  $date = $_POST['date'];
  $email = $_POST['email'];
   $people = $_POST['people'];
   $time = $_POST['time'];
if($people <= 4)	{
   $tables=1;
}
elseif(($people > 4) && ($people <= 6)){
	$tables=2;
}elseif(($people > 6) && ($people <= 8)){
	$tables=3;
}elseif(($people > 8) && ($people <= 10)){
	$tables=4;
}elseif(($people > 10) && ($people <= 12)){
	$tables=5;
}
else{
	 $msg="For reservation up to 12 people please make a call reservation";
	echo "<script type=\'text/javascript\'> 
	         alert('$msg');
             location.href='../index.php';
		</script>";
				  
 }
 
 
 
 
                //ζηταμε το αθροισμα των τραπεζιων που εχουν οριστει απο τον διαχειριστη ως διαθεσιμα
				   $sqlt = "SELECT tables FROM tables WHERE date='null';";
                   $resultt = mysqli_query($conn, $sqlt);
                 $resultCheckt = mysqli_num_rows($resultt);
	               $rowt = mysqli_fetch_assoc($resultt);
				   $sumt = $rowt['tables'];
				  // echo "number of tables ".$sumt;
				  
				  
				  
				  
                //ζηταμε τα τραπεζια που εχουν οριστικοπιηθει ως διαθεσιμα για την μερα που εγινε η κρατηση
				  $aval_date=mysqli_real_escape_string($conn,$date);
                  $sql_query = "SELECT * FROM tables WHERE date='$aval_date'; ";
                   $result_query = mysqli_query($conn, $sql_query);
                   $resultCheck_result = mysqli_num_rows($result_query);
	               $row_aval = mysqli_fetch_assoc($result_query);
				   $aval_table_date = $row_aval['tables'];
				   if($aval_table_date==0){
					   $aval_table_date=$sumt;
				   }
				 
		

              //ζηταμε το αθροισμα των τραπεζιων που εχουν κρατηθει για την μερα που εγινε η κρατηση
            $rdate=mysqli_real_escape_string($conn,$date);
             $sql_date = "SELECT SUM(tables) AS value_sum_date FROM reservation WHERE date='$rdate' ;";
             $result_date = mysqli_query($conn, $sql_date);
             $resultCheck_date = mysqli_num_rows($result_date);
	         $row_date = mysqli_fetch_assoc($result_date);
             $sum_date = $row_date['value_sum_date']; 
			// echo $sum_date;
			 
			 
			 $tables_num=$tables-1;
			 
			 if ($aval_table_date==$sumt){
            // αν τα δεν υπραχουν διαθεσιμα τραπεζια τοτε δεν γινεται η κρατηση
           	  if(($sum_date+$tables_num) >= $sumt){
				  $message="The reservation on ".$date." for ".$tables." table could not been because there are not available tables";
				     echo "<script type='text/javascript'>
					 alert('$message');
                    window.location.href='../index.php';
					 </script>";
				  }else{
			 
			 //  echo $sum_date;

  $sql = "INSERT INTO reservation(name, phone, date, email, person, time, tables)
    VALUES ('$name', '$phone', '$date', '$email', '$people', '$time', '$tables');";
 mysqli_query($conn, $sql);

               $message="The reservation on ".$date." for ".$tables." table has been succesfully !!!";
             echo "<script type='text/javascript'>
			         alert('$message');
                     window.location.href='../index.php';
				   </script>";

				  }	  
			 }elseif($sumt != $aval_table_date){
				 
				 if(($sum_date+$tables_num)>= $aval_table_date){
					 $message="The reservation on ".$date." for ".$tables." table  could not been because there are not available tables";
				 echo "<script type='text/javascript'>
					alert('$message');
                    window.location.href='../index.php';
				 </script>";}
				  else{
					   

   $sql = "INSERT INTO reservation(name, phone, date, email, person, time, tables)
    VALUES ('$name', '$phone', '$date', '$email', '$people', '$time', '$tables');";
 mysqli_query($conn, $sql);
 
  $message="The reservation on ".$date." for ".$tables." table has been succesfully !!!";
             echo "<script type='text/javascript'>
			         alert('$message');
                     window.location.href='../index.php';
				   </script>";
					  
				  }
			 }
 
 

      
      }

  mysqli_close($conn);
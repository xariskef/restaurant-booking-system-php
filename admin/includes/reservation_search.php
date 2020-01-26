<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
  include'dbconn.inc.php';
  $date = $_GET['date_search'];
  
             $date=mysqli_real_escape_string($conn,$date);
             $sql_date = "SELECT COUNT(reservation_id) AS value_sum_date FROM reservation WHERE date='$date' ;";
             $result_date = mysqli_query($conn, $sql_date);
             $resultCheck_date = mysqli_num_rows($result_date);
	         $row_date = mysqli_fetch_assoc($result_date);
             $sum_date = $row_date['value_sum_date'];
			

	if($sum_date>0){
	echo '<div><b> There are '.$sum_date.' reservations on '.$date.'</b></div><br>';
	}
	
    $date=mysqli_real_escape_string($conn,$date);
						
					$sql = "SELECT * FROM reservation WHERE date='$date';" ;
                   $result = mysqli_query($conn, $sql);
                   $resultCheck = mysqli_num_rows($result);
                   
				   
					 
         if($resultCheck > 0){
	         while($row = mysqli_fetch_assoc($result)){
            	 
              
                  
				  echo '-->
        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Reservations
          </div>
		  <div class="card-body">';
                  
				  echo '<div>Added on&nbsp;'.$row['time'].
						 '&nbsp;&nbsp;&nbsp;&nbsp;<br></div>&nbsp;'.$row['name'].'&nbsp;&nbsp;&nbsp;'.$row['email'].'&nbsp;&nbsp<br>';
				  
				   echo '<span class="glyphicon glyphicon-check" aria-hidden="true"></span>&nbsp;'.$row['tables']." &nbsp; ";
				   if($row['tables']==1) {
				  echo "table&nbsp;&nbsp;&nbsp;";}
				  else{
				     echo "tables&nbsp;&nbsp;&nbsp;";
				  };
				  echo '<span class="glyphicon glyphicon-user" aria-hidden="true"></span> for &nbsp;'.$row['person']." &nbsp;";
				  
				  
				  if($row['person']==1) {
				  echo "person&nbsp;&nbsp;&nbsp;";}
				  else{
				     echo "people&nbsp;&nbsp;&nbsp;";
				  };
				  
				  echo '<span class="glyphicon glyphicon-time" aria-hidden="true"></span>&nbsp;Booked on &nbsp;'.$row['date']."&nbsp;&nbsp;&nbsp;";
				  echo '<span class="glyphicon glyphicon-time" aria-hidden="true"></span>&nbsp;At &nbsp;'.$row['time']."&nbsp;&nbsp;&nbsp;";
		 		  
			 
                echo "</div></div>";
				 }
                  }else{
					  $msg='There are not reservations on '.$date.'';
				
						    echo '<script type=\'text/javascript\'>'; 
                            echo 'alert("'.$msg.'");'; 
                             echo "window.location.href='../reservations.php';";
							  echo '</script>';
				  }



					 
}else{
	
   // die("Connection failed: " . mysqli_connect_error());
	header("location:../../errors/index.html");
							exit();
}
<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $email = $password = $confirm_password = "";
$username_err = $email_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    //validate email
	 
    if(empty(trim($_POST["email"]))){
        $username_err = "Please enter a email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";
        
        if($stmt1 = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt1, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt1)){
                /* store result */
                mysqli_stmt_store_result($stmt1);
                
                if(mysqli_stmt_num_rows($stmt1) == 1){
                    $email_err = "There is an account with this email.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt1);
	}
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
			$param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Login page</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700%7CCabin:400%7CDancing+Script" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="../css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="../css/owl.theme.default.css" />

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="../css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="../css/style.css"/>

    </head>
</head>
<body>
<div class="container">
	<div class="row">
	
	<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
						<div class="opening-time row">
						<a class="white-text" href="../index.php">Home</a>
							<div class="section-header text-center">
								<h2 class="title white-text">Sign up</h2>
							</div>
							<form class="reserve-form row" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
							
							<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
							  <label for="phone">Name:</label>
							   <input class="input" name="username" id="name" type="text" value="<?php echo $username; ?>" placeholder="name" required>
							  </div>
							  
							  <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
							  <label for="phone">Email:</label>
							   <input class="input" name="email" id="email" type="text" placeholder="email" required>
							   </div>
							   
							   <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
							  <label for="phone">Password:</label>
							   <input class="input" name="password" id="password" type="password" placeholder="password" required>
							   </div>
							   
							  <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                              <label>Confirm Password</label>
                              <input type="password" id="password" name="confirm_password" class="input" value="<?php echo $confirm_password; ?>">
                             <span class="help-block"><?php echo $confirm_password_err; ?></span>
                             </div>
							   
							   <div class="col-md-12 text-center">
								<button type="submit" class="btn btn-primary" value="Submit">Sign up</button>
							   </div>
							   
							</form>
							<div class="section-header text-center">
							<a class="white-text" href="login.php"> You already have an account?</a>
							</div>
						</div>
					</div>
					</div>
					</div>
	
	





 <!--   <div class="wrapper">
        <h2>Sign Up</h2>
      <p>Please fill this form to create an account.</p>
        <form action="<?php // echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php //echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php//echo $username; ?>">
                <span class="help-block"><?php //echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php //echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php// echo $password; ?>">
                <span class="help-block"><?php //echo $password_err; ?></span>
            </div>
            <div class="form-group <?php //echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php //echo $confirm_password; ?>">
                <span class="help-block"><?php //echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    -->
</body>
</html>
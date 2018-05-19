<?php 
	require 'DBconfig/config.php';
	 
 ?>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body style="background-color:#bdc3c7">
		<div id="main_wrapper">
			<center> 
				<h2>Registration Form</h2> 
				<img src="img/Login.png"class="1" />
				
			</center> 

			<form class="myform" action="registation.php" method="post">
				<lable>Username:</lable><br>
				<input name="username" type="text" class="inputvalues" placeholder="Type your username" required /><br>
				<lable>Password</lable><br>
				<input name="password" type="text" class="inputvalues" placeholder="Type your password"  required/><br>
				<lable>Confirm Password:</lable><br>
				<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm Password" required /><br>
				<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up" /><br>
				<a href="Login.php"><input type="button" id="back_btn" value="Back"/></a><br>
			</form>

			<?php 
				if (isset($_POST['submit_btn'])) {
				 	//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
 
				 	$username = $_POST['username'];

				 	$password= $_POST['password'];

				 	$cpassword = $_POST['cpassword'];

				 	if($password==$cpassword){

				 		$query= "select * from user WHERE username='$username'";
						$query_run=mysqli_query($con,$query);

						if (mysqli_num_rows($query_run)>0) {
							//there is akready a user with the same username

							echo '<script type ="text/javascript"> alert("User already exists... try another username") </script>';
						}
						else {

							$query="insert into user values('$username','$password')";
							$query_run = mysqli_query($con,$query);

							if ($query_run) {
  
							echo '<script type ="text/javascript"> alert("User Registerd.. Go to login page to login") </script>';
							}  

							else{

								echo '<script type ="text/javascript"> alert("Error!") </script>';
							}

						}


				 	}
				 	else{

				 		echo '<script type ="text/javascript"> alert("Password and confirm password does not match!") </script>';
				 	}


				 } 
			 ?>

		</div>
</body>
</html> 
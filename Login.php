<?php
session_start();

require 'DBconfig/config.php';
	
 ?>

<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body style="background-color:black">
		<div id="main_wrapper">
			<center> 
				<h2>Login Form</h2> 
				<img src="img/Login.png"class="1" />
				
			</center> 

			<form class="myform" action="login.php" method="post">
				<lable>Username:</lable><br>
				<input name="username" type="text" class="inputvalues" placeholder="Type your username"  /><br>

				<lable>Password</lable><br>
				<input name="password" type="password" class="inputvalues" placeholder="Type your password"  /><br>

				<input name="login" type="submit" id="login_btn" value="Login" /><br>
				<a href="registation.php"><input type="button" id="register_btn" value="Register" /></a><br>

			</form>
			<?php 
				if(isset($_POST['login'])){
					$username=$_POST['username'];
					$password=$_POST['password'];

					$query="select * from user WHERE username='$username' AND password='$password'";
					$qurey_run = mysqli_query($con,$query);
					if (mysqli_num_rows($qurey_run)>0)
					 {
						$_SESSION['username']=$username;
						header('location:home.php');

					}
					else{
						echo '<script type ="text/javascript"> alert("Invalid credentials") </script>';
					}
				}


			 ?>


		</div>
</body>
</html> 
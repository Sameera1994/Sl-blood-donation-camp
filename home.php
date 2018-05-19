<?php 
	session_start();
	require 'DBconfig/config.php';

 ?>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body style="background-color:black">
		<div id="main_wrapper">
			<center> 
				<h2>Home Form</h2> 
			<h2>Welcome   
					<?php echo "{$_SESSION['username']}"; ?>
					</h2>
				<img src="img/Login.png" class="1" /> 
				
			</center> 

			<form class="myform" action="home.php" method="post">
				
				<input name="logout" type="submit" id="logout_btn" value="Log Out" /><br>
				
			</form>

			<?php 
			 if (isset($_POST['logout'])) {

			 	session_destroy();
				header('location:Login.php');
			 	
			 }
				


			 ?>



		</div>
</body>
</html> 
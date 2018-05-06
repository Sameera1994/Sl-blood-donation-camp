<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/receiver_style.css">
	<title>Online blood bank</title>
</head>
<body>
	<div class="wrapper">
	<h1>Receiver Registration</h1>
		<DIV class="form">
			<form action="receiver_registration.php">
				Name<br>
					<input type="text" name="name" placeholder="name" ><br>
				ID Number<br>
					<input type="number" name="name" placeholder="number" ><br>
				Gender<br>
					<select name="gender">
  						<option value="male">Male</option>
  						<option value="female">Female</option><br>
  					</select>
  				Date of birth<br>
  					<input type="date" name="bday"><br>
  				Email<br>
  					<input type="email" name="email" placeholder="email"><br>
  				District<br>
  					<select name="District">
  						<option value="Hambantota">Hambantota</option>
  						<option value="Matara">Matara</option>
				<option value="female">Galle</option>
  						<option value="female">Kegalle</option>
  						<option value="female">Rathnapura</option>
  						<option value="female">Gampaha</option>
  						<option value="female">Colombo</option>
  						<option value="female">Kalutara</option>
  						<option value="female">Badulla</option>
  						<option value="female">Monaragala</option>
  						<option value="female">Matale</option>
  						<option value="female">Kandy</option>
  						<option value="female">Nuwara Eliya</option>
  						<option value="female">Puttalam</option>
  						<option value="female">Kurunegala</option>
  						<option value="female">Trincomalee</option>
  						<option value="female">Batticola</option>
  						<option value="female">Ampara</option>
  						<option value="female">Anuradapura</option>
  						<option value="female">Polonnaruwa</option>
  						<option value="female">Jaffna</option>
  						<option value="female">Kilinochchi</option>
  						<option value="female">Mannar</option>
  						<option value="female">Mullativu</option>
  						<option value="female">Vavuniya</option>

				</select>
				Address<br>
					<input type="text" name="address" placeholder="address"><br>
				Contact Number<br>
					<input type="tel" name="number" placeholder="mobile number"><br>
				Land line<br>
					<input type="tel" name="landphone" placeholder="land number"><br>
				Situation of illness<br>
					<input type="text" name="illness" placeholder=""><br>
				Last day of blood transfer <br>
					<input type="date" name="date" placeholder="date"><br>
					<input type="checkbox" name="checkbox"> I do hereby certify that the above particulars are true & accurate to the<br>abset of my knowledge.

				<div class="cancel">
					<input  type="button" name="button" value="Cancel">
					<input type="submit" name="submit" value="submit">
		</div>
</html>
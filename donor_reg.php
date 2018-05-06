<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Online blood Bank</title>
</head>
<body>

<div class="wrapper">
	<h1>Donor Registration</h1>
		<DIV class="form">
			<form action="donor_registration.php">
				Name<br>
					<input type="text" name="name" placeholder="name" ><br>
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
				Previous blood donation date<br>
					<input type="date" name="date" placeholder="date"><br>
				Option for donation<br>
					<select>
						<option value="3months">Once in 3 months</option>
						<option value="6months">Once in 6 months</option>
						<option value="12months">Once in 12 months</option>
					</select>
				
		</DIV>
		<div class="cancel">
					<input  type="button" name="button" value="Cancel">
					<input type="submit" name="submit" value="submit">
		</div>


</div>

</body>
</html>
<?php
/*session_start();
$_SESSION['message'] = '';

$mysqli = new mysqli('localhost', 'root', '', 'blood_camp_db');

 if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $weight = $mysqli->real_escape_string($_POST['weight']);
    $hematocrit = $mysqli->real_escape_string($_POST['hematocrit']);
    $temperature = $mysqli->real_escape_string($_POST['temperature']);
    $pulse = $mysqli->real_escape_string($_POST['pulse']);
    $bloodpresure = $mysqli->real_escape_string($_POST['bloodpresure']);
    $skin = $mysqli->real_escape_string($_POST['skin']);
    $hemo = $mysqli->real_escape_string($_POST['hemo']);
    $appearance = $mysqli->real_escape_string($_POST['appearance']);


}*/

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "blood_camp_db";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) ; 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
  echo "Connected successfully";
}




    $weight = $_POST['weight'];
    $hemo = $_POST['hemo'];
    $temp = $_POST['temp'];
    $pulse = $_POST['pulse'];
    $bloodP = $_POST['bloodP'];
    $aps = $_POST['aps'];
    $hematocrit = $_POST['hematocrit'];
    $apg = $_POST['apg'];


    $sql = "INSERT INTO donar_health (weight,hemo,temp,pulse,bloodP,aps,hematocrit,apg) VALUES ('$weight','$hemo', $temp, '$pulse', $bloodP, '$aps', '$hematocrit', '$apg'); ";

    mysqli_query($conn, $sql);

if (!mysqli_query($conn,$sql))
  {
  echo("Error description: " . mysqli_error($conn));
  }

    // header("Location: ../home.php?signup=success");

  ?>

<!--<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>-->
<link rel="stylesheet" href="2.css" type="text/css">
<?php include 'footer.php'; ?>
<div class="body-content">
  

  <div class="module">
    <h1>Donar Physical Recording Results</h1>





    <form class="2" action="2.php" method="post" enctype="multipart/2-data" autocomplete="on">
      <div class="alert alert-error"></div>
        <select type="text"  name="weight">
      	<option value="" disabled selected hidden>Weight greater than 110 lbs?</option>
      	<option value="yes"> Yes</option>
      	<option value="no"> No</option>
      </select>

      <select type="text" name="hemo">
      		<option value="" disabled selected hidden>Hemoglobin(Copper sulfate method result-circle one) </option>
      		<option value="drop sank"> drop sank</option>
      		<option value="remained suspended"> remained suspended</option>
      		<option value="floated to top"> floated to top</option>
      </select>
      
      <input type="text" placeholder="Temperature(Celcious)" name="temp" autocomplete="off" /><br>

      <input type="text" placeholder="Pulse" name="pulse" autocomplete="off"   /><br>
      
      <input type="text" placeholder="Blood pressure(psm)" name="bloodP" autocomplete="off"  /><br>
      
      <select type="text" name="aps">
      		<option value="" disabled selected hidden> Appearance of skin at venipuncture site(circle one)</option>
      		<option value="free of lesions">free of lesions</option>
      		<option value="boils, open wounds or server skin infections present">boils, open wounds or server skin infections present</option>
      		<option value="IV drugs track present">IV drugs track present</option>
      </select> 

      <input type="text" placeholder="Hematocrit" name="hematocrit" />

      <select type="text" name="apg">
      		<option value="" disabled selected hidden>General appearance of donar(circle one)</option>
      		<option value="appears excessively nervous">appears excessively nervous</option>
      		<option value="appears drunk or under influence of drugs">appears drunk or under influence of drugs</option>
      		<option value="appears ill">appears ill</option>
      		<option value="appears ready to donate">appears ready to donate</option>
      </select>

      
     <!-- <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />-->
    	
      <input type="submit" value="Submit" name="Submit" class="btn">
      <input type="submit" value="Cancel" name="Cancel" class="btn" onclick="window.location.href='http://Sl-blood-donation-camp/home.php'" />

    </form>
  </div>

</div>
 <?php include 'footer2.php'; ?>
</body>
</html>
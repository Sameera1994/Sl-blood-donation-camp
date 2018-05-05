<!DOCTYPE html>
<html>
<head>
	<title>online blood banking</title>
</head>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="2.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Donar Physical Recording Results</h1>
    <form class="2" action="2.php" method="post" enctype="multipart/2-data" autocomplete="on">
      <div class="alert alert-error"></div>
        <select type="text" required>
      	<option value="" disabled selected hidden>Weight greater than 110 lbs?</option>
      	<option value="0"> Yes</option>
      	<option value="1"> No</option>
      </select>

      <select type="text" required>
      		<option value="" disabled selected hidden>Hemoglobin(Copper sulfate method result-circle one)</option>
      		<option value="0"> drop sank</option>
      		<option value="1"> remained suspended></option>
      		<option value="2"> floated to top></option>
      </select>
      
      <input type="text" placeholder="Temperature" name="temperature" autocomplete="off" required /><br>

      <input type="text" placeholder="Pulse" name="pulse" autocomplete="off"  required /><br>
      
      <input type="text" placeholder="Blood pressure" name="bloodpresure" autocomplete="off" required /><br>
      
      <select type="text" required>
      		<option value=""> Appearance of skin at venipuncture site(circle one)</option>
      		<option value="0">free of lesions</option>
      		<option value="1">boils, open wounds or server skin infections present</option>
      		<option value="2">IV drugs track present</option>
      </select> 

      <input type="text" placeholder="Hematocrit" name="hemo" required />

      <select type="text" required>
      		<option value="">General appearance of donar(circle one)</option>
      		<option value="0">appears excessively nervous</option>
      		<option value="1">appears drunk or under influence of drugs</option>
      		<option value="2">appears ill</option>
      		<option value="3">appears ready to donate</option>
      </select>

      
     <!-- <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />-->
    	
      <input type="submit" value="Submit" name="Submit" class="btn">
      <input type="submit" value="Cancel" name="Cancel" class="btn" onclick="window.location.href='http://project1/home.php'" />

    </form>
  </div>
</div>
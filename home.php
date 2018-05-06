<html>
<head>
	<title>Online Blood Bank</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	
</head>
<body background="img/7.jpg" opacity="0.5">
	<div class="wrapper">
		<?php include 'footer.php'; ?><br>
		<div class="content" >
			<img class="mySlides" src="img/1.jpg"  >
			<img class="mySlides" src="img/3.jpg" >
		</div>

		<script>
			var myIndex = 0;
				carousel();

				function carousel() {
    		var i;
    		var x = document.getElementsByClassName("mySlides");
    		for (i = 0; i < x.length; i++) {
       			x[i].style.display = "none";  
   					 }
    			myIndex++;
    		if (myIndex > x.length) {myIndex = 1}    
    			x[myIndex-1].style.display = "block";  
    		setTimeout(carousel, 2000); // Change image every 2 seconds
				}
		</script>


		<div class="link">
			<ul>
				<li><a class="active" href="#">I want to be a blood donor</a></li>
  				<li><a href="#">Can I receive blood</a></li>
 				<li><a href="#">Camp near you</a></li>
			</ul>
		</div>
		<?php include 'footer2.php'; ?>
	</div>

</body>
</html>
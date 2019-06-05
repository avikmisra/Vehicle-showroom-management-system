<?php
session_start();

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['user']);
	header("Location: logout.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style_page.css">
	<title>Vshmas</title>
</head>
<body>
	<header>
		<ul class="title">
			<li><strong><a href="index.php">Vshmas</a></strong></li>
		</ul>
		<ul class="menu">
			<li class="buy">
				Buy
				<ol>
					<li><a href="car.php">Car</a></li>
					<li><a href="bike.php">Bike</a></li>
				</ol>
			</li>
			<li><a href="repair.php">Repair</a></li>
			<li><a href="index.php"> logout</a></li>
		</ul>
	<div class="search">
		<input type="text" placeholder="Enter your query" class="search-txt">
		<a href="#" class="button">
			<img src="images/search.png" height="13px" width="20px"></img>
		</a>
	</div>
	</header>
	<p class="car">Cars for you</p>
	<br>
	<div class="empty"></div>
	<div class="images-car">
		<figure>
			<a href="rolls-royce-dawn-2017-image-02.php"><img src="images/vehicle/rolls-royce-dawn-2017-image-02.jpg" ></img></a>
			<a href="2016-chevrolet-tahoe-suv_image-04 (1).php"><img src="images/vehicle/2016-chevrolet-tahoe-suv_image-04 (1).jpg"></img></a>
			<a href="2016-hyundai-sonata-plug-in-01.php"><img src="images/vehicle/2016-hyundai-sonata-plug-in-01.jpg" ></img></a>
			<a href="2016-honda-cr-v_image-016.php"><img src="images/vehicle/2016-honda-cr-v_image-016.jpg" ></img></a>
		</figure>
	</div>
	<p class="car">Bikes for you</p>
	<div class="images-bike">
		<figure>
			<a href="2000000001.php">
				<img src="images/vehicle/2000000001.jpg"></img>
			</a>
			<a href="Bajaj_V_15_L_1.php"><img src="images/vehicle/Bajaj_V_15_L_1.jpg"></img></a>
			<a href="bajajpulsar_ns160_l_4.php"><img src="images/vehicle/bajajpulsar_ns160_l_4.jpg" ></img></a>
			<a href="Bajaj_V_15_L_1.php"><img src="images/vehicle/Bajaj-V-Black-HD-Wallpaper.jpg" ></img></a>
		</figure>
	</div>
	<p class="car">Companies</p>
	<div class="images-company">
		<figure>
			<img src="images/vehicle/bajaj-logo.png" height="200px" width="20%"></img>
			<img src="images/vehicle/Chevrolet-logo.jpg"height="200px" width="20%"></img>
			<img src="images/vehicle/harley logo.png" height="200px" width="20%"></img>
			<img src="images/vehicle/Honda-logo.png" height="200px" width="20%"></img>
		</figure>
	</div>
	<footer class="last">
		<ul>
			<li><a href="#">About Us</a></li>
			<li><a href="#">FAQ's</a></li>
			<li><a href="#">Terms And Conditions</a></li>
		</ul>
		<ul>
			<li><a href="#">Privacy Policy</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">Feedback</a></li>
		</ul>
	</footer>
</body>
</html>
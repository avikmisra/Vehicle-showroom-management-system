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
			<li><a href="index.php" name="logout"> logout</a></li>
		</ul>
	<div class="search">
		<input type="text" placeholder="Enter your query" class="search-txt">
		<a href="#" class="button">
			<img src="images/search.png" height="13px" width="20px"></img>
		</a>
	</div>
	</header>
	<form action="repair_req.php" method="post" class="form-repair">
		<p class="headi">vshmas</p>
		<p class="lowi">Name*:          &nbsp;  <input type="text" placeholder="Enter Name" name="name"><br></p>
		<p class="lowi">Cid*:         &nbsp;    <input type="text" name="cid" placeholder="Enter Cid"><br></p>
		<p class="lowi">vehicle-No: <input type="text" name="number" placeholder="Enter vehicle-No"><br></p>
		<p class="lowi">description:<textarea placeholder="enter description for repair" name="text"></textarea><br></p>
		<p class="butt"><button value="submit">submit request</button></p>
	</form>
	<footer class="last">
		<ul>
			<li><a href="#">About Us</a></li>
			<li><a href="#">FAQ's</a></li>
			<li><a href="#">Terms And Conditions</a></li>
		</ul>
		<ul>
			<li><a href="#">Privacy Policy</a></li>
			<li><a href="contact-us.php">Contact Us</a></li>
			<li><a href="#">Feedback</a></li>
		</ul>
	</footer>
</body>
</html>
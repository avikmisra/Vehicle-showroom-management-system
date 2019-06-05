<?php
session_start();
?>
<!doctype html>
<html>
<head>
	<style>
		#body {
				background-color: yellow;
				text-align: center;
				font-size: 25px;
				padding-top: 100px;
		}
	</style>
</head>
<body id="body">
<?php
		$name=$_POST['name'];
		 echo "welome       ::  ".$name."<br><br>";
		 $title=$_POST['cid'];
		 echo "Thank you       :: ".$name."<br>"."For doing bussiness with us "."<br>";
		  $mail=$_POST['number'];
		  $arr=$_POST['text'];
		 echo "<br>"."description of your Repair Request is <br>..........................."."<br>"."Name : ".$name."<br> Cid : ".$title."<br>Vehicle-Number : ".$mail."<br>"."Request-Description : <br>".$arr."<br>";

?>
<div class="confirm-css">
	<a href="home.php" title="back to home " style="text-decoration: none; color:blue;"><p style="height: 20px;">Return Home</p>
</div>
</body>
</html> 
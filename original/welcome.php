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
		$name=$_POST['username'];
		 echo "welome       ::  ".$name."<br>";
		 $title=$_POST['title'];
		 echo "Thank you       :: ".$title." ".$name."<br>"."For doing bussiness with us "."<br>";
		  $mail=$_POST['usermail'];
		 echo "<br>"."your confrmatiion mail has been send to your email-id that is   :: ".$mail."<br>";

?>
<div class="confirm-css">
	<a href="home.php" title="back to home " style="text-decoration: none; color:blue;"><p style="height: 20px;">Home</p>
</div>
</body>
</html> 
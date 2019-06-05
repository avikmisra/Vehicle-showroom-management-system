<?php
session_start();
$conn=mysqli_connect("localhost",'root','','vsms') or die(mysqli_error($con));


if(isset($_POST['btn-login']))
{
	$c_type = $_POST['u_type'];
    $c_email = $_POST['u_email'];
    $c_pass = $_POST['u_pass'];

    $res=mysqli_query($conn,"SELECT * FROM users WHERE u_email='$c_email'");
    $row=mysqli_fetch_array($res);

    $count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row

    if( $row['u_pass'] == $c_pass)
    {
    	if ( $c_type == "Admin" && $row['u_type']==$c_type)
	     {   $_SESSION['cus'] = $row['f_name'];
    	    header("Location: admin/index.php");
    	}
    	else{
    		   $_SESSION['cus'] = $row['f_name'];
    	    header("Location: logout.php");
    	}
	}
    else
    {
        ?>
        <script>alert('Username or Password Is Wrong !');</script>
        <?php
    }

}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>VSMS LOGIN</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="login/css/styles.css" rel="stylesheet">

</head>

<body>
    <div class="loinpage">
        <div class="mar">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Log in to Client Area</div>
                <div class="panel-body">
                    <form role="form" method="post">
                        <fieldset>
                        	<div class="form-group">
                                <input class="form-control" placeholder="user-type" name="u_type" type="text" autofocus="" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="u_email" type="email" autofocus="" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="u_pass" type="password" required>
                            </div>
                            <button class="btn btn-success" type="submit" name="btn-login">Sign In</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    </div>
    </div>
</body>

</html>

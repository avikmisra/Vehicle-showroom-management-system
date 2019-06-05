<?php
session_start();
?>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">-->
        <link rel="stylesheet" href="src/css/font-awesome.min.css">
        <link rel="stylesheet" href="src/css/bootstrap.css">
        <link rel="stylesheet" href="src/css/style.css">
        <title>Airline Reservation System</title>
    </head>
    <body>
    <?php
    //echo "hello";
    $msg="";
    $msgClass="";
    //echo "hello";
    if(isset($_POST['login1']))
    {
        //echo "hello";
        $email2=htmlspecialchars($_POST['email2']);
        $password2=htmlspecialchars($_POST['password2']);
        //echo $email2;
        if(!empty($email2)  && !empty($password2))
        {
            //echo "hello";
            require("connection.php");
            $c=0;
            //echo $c;
            $query=mysqli_query($conn,"select * from user where email='$_POST[email2]' && password='$_POST[password2]'");
            $c=mysqli_num_rows($query);
            //echo $c;
            if($c==0)
            {
                $msg="Invalid email or password";
                $msgClass="alert-danger";
            }
            else
            {
                //echo "hello";
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email2;
                $_SESSION['password']=$password2;
                if($_SESSION['email']=="arpan@msn.com" && $_SESSION['password']=="arpan123" && $_SESSION['loggedin'] = true)
                header("location:admin.php");
                //else
                //{
                   // echo "hello";
                //}
                $msg="Log in successful";
                $msgClass="alert-success";
            }
        }
        else{
            $msg="plese fill in all details";
            $msgClass="alert-danger";
        }
    }
?>
        <?php if($msg!=""):?>
            <div class="alert <?php echo $msgClass?> text-center" id="msg"><?php echo $msg?></div>
        <?php endif;?>
    <div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                        <div class="col-md-6">
                            <h5 class="text-monospace">Sign in</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="" style="text-decoration:none;text-align:right"><h5 id="cancel">&times</h5></a>
                        </div>
                </div>
                <div class="modal-body">
                    <form method="POST" action="book.php" id="form_login">
                        <div class="form-row">
                            <div class="col-lg-6">
                                <label for="email2" >EmailId</label>
                                <input type="text" name="email2" id="email2" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <label for="password2" >Password</label>
                                <input type="password" name="password2" id="password2" class="form-control">
                            </div>
                        </div>
                        <div class="pt-4">
                        <a href=""><input type="submit" class="btn btn-primary btn-block submit" name="login1" value="log in" style=""></a>
                        </div>
                        <?php if($msg!=""):?>
                        <div class="alert <?php echo $msgClass?> text-center" id="msg"><?php echo $msg?></div>
                        <?php endif;?>
                    </form>
                </div>
                <!-- footer -->
                <div class="modal-footer">
                        <div class="col-md-6 text-left">
                            <a href="#" style="text-decoration:none;"><h6>Forget Password?</h6></a>
                        </div>
                        <div class="col-md-6 text-right">
                            Don't have account?<a href="#" style="text-decoration:none;color:blue">sign up</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <script src="src/js/jquery.min.js"></script>
        <script src="src/js/popper.min.js"></script>
        <script src="src/js/bootstrap.min.js"></script>
        <script src="src/js/app2.js"></script>
    </body>
</html>
<?php #if($msg!="")
    {?>
    <div class="alert <?php echo $msgClass?> text-center" id="msg"><?php echo $msg?></div>
    <?php
    }?>
<?php if($msg!=""):?>
                    <div class="alert <?php echo $msgClass?> text-center" id="msg"><?php echo $msg?></div>
                    <?php endif;?>
<!DOCTYPE html>
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
    if(isset($_POST["signup01"]))
    {
        //echo "hello";
        $name=htmlspecialchars($_POST['name1']);
        $gender=htmlspecialchars($_POST['gender1']);
        $confpassword=htmlspecialchars($_POST['cpassword1']);
        $dob=htmlspecialchars($_POST['dob1']);
        $email=htmlspecialchars($_POST['email1']);
        $phone=htmlspecialchars($_POST['phone1']);      
        $password=htmlspecialchars($_POST['password1']);
        //echo

        if(!empty($name) &&!empty($gender) &&!empty($dob) &&!empty($confpassword) &&!empty($email) && !empty($phone) && !empty($password))
        {

            if(filter_var($email,FILTER_VALIDATE_EMAIL)===false)
            {
                $msg="please use a valid email :ex:myname@gmail.com ";
                $msgClass="alert-danger";
            }
            elseif($password != $confpassword)
            {
            	$msg="password not confirmed ";
                $msgClass="alert-danger";	
            }
            else{
                require("connection.php");
                $query ="insert into users(Name,Email,Gender,Password,dob,phone-no) "; 
                $query.="values('$_POST[name1]','$_POST[email1]','$_POST[gender1]','$_POST[password1]','$_POST[dob1]','$_POST[phone1]'";
                mysqli_query($conn,$query); 
                $msg="signup completed";
                $msgClass="alert-success";
            }


        }
        else{
            $msg="please fill in all fields";
            $msgClass="alert-danger";
        }
       /* require 'PHPMailerAutoload.php';
        
        $mail = new PHPMailer;
        
        $mail->SMTPDebug = 4;
        //$mail->SMTPDebug = 3;                               // Enable verbose debug output
        
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'arpan1998maiti27@gmail.com';                 // SMTP username
        $mail->Password = 'arpan123';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        
        $mail->setFrom('arpan1998maiti27@gmail.com', 'Mailer');
        $mail->addAddress('arpan1998maiti@gmail.com');     // Add a recipient
       // $mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('arpan1998maiti27@gmail.com');
     //$mail->addCC('cc@example.com');
       // $mail->addBCC('bcc@example.com');
        
       // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
       // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML
        
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }*/
    }
    ?>
    <?php if($msg!="")
    {
    ?>
    <div class="alert <?php echo $msgClass?> text-center" id="msg"><?php echo $msg?></div>
    <?php 
    }?>
    <!--sign up modal-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                        <div class="col-md-6">
                            <h5 class="text-monospace">Sign Up</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="" style="text-decoration:none;text-align:right"><h5 id="cancel">&times</h5></a>
                        </div>
                </div>
                <div class="modal-body">
                    <form method="POST" action="">
                        <div class="form-row">
                        	<div class="col-lg-12">
                                <label for="name1" >Name</label>
                                <input type="text" name="name1" id="name1" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-md-12">
                                <label for="gender" id="gender1">Gender :&nbsp;&nbsp;</label>
                                <input type="radio" name="gender1" id="gender1" >&nbsp;Male&nbsp;&nbsp;
                                <input type="radio" name="gender1" id="gender1" >&nbsp;Female&nbsp;&nbsp;
                                <input type="radio" name="gender1" id="gender1" >&nbsp;Others
                            	<br>
                            </div>
                            <div class="col-lg-6">
                                <label for="dob1" >D.O.B</label>
                                <input type="date" name="dob1" id="dob1" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <label for="email1" >Email</label>
                                <input type="text" name="email1" id="email1" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-lg-12">
                                <label for="password1" >Password</label>
                                <input type="password" name="password1" id="password1" class="form-control" placeholder="********">
                            </div>
                            <div class="col-lg-12">
                                <label for="cpassword1" >Confirm Password</label>
                                <input type="password" name="cpassword1" id="cpassword1" class="form-control" placeholder="********">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="phone1" >Phone no</label>
                                <input type="text" name="phone1" id="phone1" class="form-control" placeholder="phone-number">
                            </div>
                        </div>
                    <?php if($msg!=""):?>
                    <div class="alert <?php echo $msgClass?> text-center" id="msg"><?php echo $msg?></div>
                    <?php endif;?>
                    <div class="pt-4">
                       <a href="#"><input type="submit" class="btn btn-primary btn-block submit" name="signup01" value="Signup"></a>
                    </div>
                    </form>
                </div>
                <!-- footer -->
                <div class="modal-footer">
                        <div class="col-md-12 text-center">
                            Do yo have account?<a href="#mymodal2" style="text-decoration:none;color:blue">log in</a>
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
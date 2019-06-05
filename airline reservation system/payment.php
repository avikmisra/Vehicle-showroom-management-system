<?php
    require("connection.php");
    $msg="";
    $msgClass="";
    if(isset($_POST["book"]))
    {
       // echo "hello";
        $from=$_POST['from'];
        $to=$_POST['to'];
        $date=$_POST['date'];
        $depttime=$_POST['depttime'];
        $arrivaltime=$_POST['arrivaltime'];
        $type=$_POST['type'];
        $airline=$_POST['airline'];
        $no_of_passanger=$_POST['no_of_passanger'];
        $class1=$_POST['class1'];
        $price=$_POST['price'];
        $flight_no=$_POST['flight_no'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $booking_status="success";
        $payment_status="due";
        $seat_no="0";
        //echo

        if(!empty($from) && !empty($to) && !empty($date) && 
        !empty($depttime) && !empty($arrivaltime) && !empty($type) && !empty($airline) 
        && !empty($no_of_passanger) && !empty($class1) && !empty($price) && !empty($flight_no) &&
        !empty($name) && !empty($email))
        {
      
                //require("connection.php");
                $query="insert into ticket values('','$from','$to','$date','$depttime','$arrivaltime','$type','$airline','$class1','$price','$flight_no','$name','$email','$no_of_passanger','$booking_status','$payment_status','$seat_no')";
                mysqli_query($conn,$query);
                //echo "hello"; 
                $msg="plane added";
                $msgClass="alert-success";

        }
        else{
            $msg="please fill in all fields";
            $msgClass="alert-danger";
        }
    }
    //header("location: admin.php");
    //exit;
?>

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
        <link rel="stylesheet" href="src/css/admin.css">
    </head>
<body>
    <!--navbar-->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">
                <a href="admin.php" class="navbar-brand">USER PANNEL</a>
                <button type="button" name="button" class="navbar-toggler" data-toggle="collapse" data-target="#navNavbar"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <div class="nav-link dropdown">
                            <div class="dropdown-toggle"  data-toggle="dropdown">Hey<span class="caret"></span></div>
                            <ul class="dropdown-menu">
                                <li ><a href="#" style="text-decoration:none;"class=" text-dark text-center" >My profile</a></li>
                                <li><a href="logout.php" style="text-decoration:none;" class=" text-dark text-right fa fa-exit">log out</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
<div class="row">
    <div class="col-2 pl-3 left_section">
                <div class="row align-items-center text-dark mt-2">
                    <div class="col-3">
                    <img src="./src/img/profile.png" class="profile_image rounded-circle pl-1" alt="">
                    </div>
                    <div class="col-9">
                    <p class="m-0"><i>User</i></p>
                    </div>
                </div>
                <ul class="nav mt-2 sidebar flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white"><i class=""></i> My profile</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="#" id="view_ticket"><i class="fa fa-view"></i>View ticket</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link text-white" href="book.php"><i class="fa fa-book"></i>Booking</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link text-white active" href=""><i class="fa fa-cash"></i>Payment</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link text-white" href="#"><i class="fa fa-edit"></i> Edit your Profile</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link text-white" href="view_booking.php"><i class="fa fa-view"></i>view booking</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link text-white" href="#" ><i class="fa fa-view"></i>Change password</a>
                    </li>
                </ul>
    </div>
    <div class="col-lg-10 right-section">
       <div class="row">
            <div class="col-lg-2">
            
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        Payment
                    </div>
                    <div class="card-body">
                        <form action="view_ticket.php?id=<?php echo "$_GET[id]"?>" method="POST">
                        <div class="form-row">
                                <label for="todate" >Date</label>
                                <input type="text" name="today_date" id="today_date" class='form-control' value="" disabled>
                        </div>
                        <div class="form-row pt-4">
                            <div class="col-lg-4">
                                <a href="view_ticket.php"><input type="submit" name="bycash"  class='form-control bg-success text-white' value="CASH"></a>
                            </div>
                            <div class="col-lg-4">
                                <a href="view_ticket.php"><input type="submit" name="bydebit"  class='form-control bg-success text-white' value="DEBIT"></a>
                            </div>
                            <div class="col-lg-4">
                                <a href="view_ticket.php"><input type="submit" name="netbanking"  class='form-control bg-success text-white' value="NETBANKING"></a>
                            </div>
                        </div>

                        </form>
                        <!--<div class="col-lg-4">
                                <a href="view_ticket.php?id=<?php echo "1"?>"><input type="submit" name="bycash"  class='form-control bg-success text-white' value="CASH"></a>
                            </div>-->
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
            
            </div>
       </div>
    </div>
</div>
    



        <script src="src/js/jquery.min.js"></script>
       <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>-->
        <script src="src/js/popper.min.js"></script>
        <script src="src/js/bootstrap.min.js"></script>
        <script src="src/js/app2.js"></script>
        <script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>
    <script src="src/js/admin.js"></script>
    <script src="src/js/payment.js"></script>
        
    </body>
</html>
<?php
    require("connection.php");
    $msg="";
    $msgClass="";
    if(isset($_POST["book"]))
    {
        //echo "hello";
        //echo $_POST['from'];
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
                        <a class="nav-link text-white" href="view_ticket.php" id="view_ticket"><i class="fa fa-view"></i>View ticket</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link text-white" href="book.php"><i class="fa fa-book"></i>Booking</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><i class="fa fa-cash"></i>Payment</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link text-white" href="#"><i class="fa fa-edit"></i> Edit your Profile</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link active text-white" href="view_booking.php"><i class="fa fa-view"></i>view booking</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link text-white" href="#" ><i class="fa fa-view"></i>Change password</a>
                    </li>
                </ul>
    </div>
    <div class="col-lg-10 right-section">
        <div class="row p-2">
            <div class="col-lg-12">
                <table class="table table-striped table-secondary table-hover" id="view_table" style="background-color:#f5f5f5" >
                    <thead class="text-white text-uppercase" style="background-color:#19357D;">
                        <tr class="text-center">
                            <th scope="col">From</th>
                            <th scope="col">To </th>
                            <th scope="col">Dept Time</th>
                            <th scope="col">Price</th>
                            <th scope="col">Date</th>
                            <th scope="col">Flight no</th>
                            <th scope="col">booking status</th>
                            <th scope="col">Payment stauus</th>
                            <th scope="col">payment</th>
                            <th scope="col">cancel</th>
                        </tr>
                    </thead>
                    <tbody class="text-capitalize">
                        <?php
                           
                                    $query=mysqli_query($conn,"select * from ticket where booking_status='success'");
                                    $datas4=array();
                                    if(mysqli_num_rows($query)>0)
                                        {
                                            while($row=mysqli_fetch_assoc($query))
                                            {
                                                 $datas4[]=$row;
                                            }
                                        }
                                    else
                                        {
                                            $msg="no flights are there";
                                            $msgColor="alert-danger";
                                        }
                                        //print_r($datas4);
                                        foreach ($datas4 as $data): ?>
                                        <tr class="text-center">
                                            <td><?php echo $data['from1']; ?></td>
                                            <td><?php echo $data['to1']; ?></td>
                                            <td><?php echo $data['depttime']; ?></td>
                                            <td><?php echo $data['price']; ?></td>
                                            <td><?php echo $data['date']; ?></td>
                                            <td><?php echo $data['flight_no']; ?></td>
                                            <td><?php echo $data['booking_status']; ?></td>
                                            <td><?php echo $data['payment_status']; ?></td>
                                            <td><button class="btn btn-success" name="payment">
                                            <a href="payment.php?id=<?php echo $data['id'];?>" class="text-white" style="text-decoration:none;" >Pay</a></button></td>
                                            <td><button class="btn btn-danger" name="payment"><a href="cancel.php?id=<?php echo $data['id']; ?>" class="text-white" style="text-decoration:none;" >cancel</a></button></td>

                                        </tr>
                                    <?php endforeach; ?>            
                    </tbody>
                </table>
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
        
    </body>
</html>
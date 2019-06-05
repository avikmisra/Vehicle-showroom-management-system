<?php
    require("connection.php");
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
                        <a class="nav-link text-white active" href="#" id="view_ticket"><i class="fa fa-view"></i>View ticket</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link text-white" href="book.php"><i class="fa fa-book"></i>Booking</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link text-white" href=""><i class="fa fa-cash"></i>Payment</a>
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
            <div class="col-lg-1">
            
            </div>
            <div class="col-lg-10">
                <div class="card mt-5">
                <?php
        
                           //$query1=mysqli_query($conn,"update ticket set payment_status='success' where id='$_GET[id]'");
                           $query=mysqli_query($conn,"select * from ticket where id='$_GET[id]'");
                           
                           $datas5=array();
                           if(mysqli_num_rows($query)>0)
                               {
                                   while($row=mysqli_fetch_assoc($query))
                                   {
                                        $datas5[]=$row;
                                   }
                               }
                           else
                               {
                                   $msg="no flights are there";
                                   $msgColor="alert-danger";
                               }
                               //print_r($datas4);
                               foreach ($datas5 as $data): ?>
                               <div class="card-header bg-primary text-white text-uppercase">
                                    <h2><?php echo $data['airline']; ?></h2>
                                </div>
                                <?php
                                $x=$data['depttime'];
                                //echo $x;
                                $y=(int)substr($x,0,2);
                                //echo $y;
                                $board1=$y-1;
                                $board=$board1.":".substr($x,3,2);
                                $book_id= $data['id'];
                                echo $book_id;
                                ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3">
                                               <div><img src="src/img/barcode.jpg" alt="hello" class="rotate-90" style="height:85px;width:190px;"></div>
                                        </div>
                                        <div class="col-lg-3">
                                                <div><h6 class="pt-1 text-secondary ">Name</h6></div>
                                                    <div class="text-uppercase"><h5><?php echo $data['name'];?></h5></div>
                                                <div><h6 class="pt-1 text-secondary ">From</h6></div>
                                                    <div class="text-uppercase"><h5><?php echo $data['from1'];?></h5></div>
                                                <div><h6 class="pt-1 text-secondary ">To</h6></div>
                                                    <div class="text-uppercase"><h5><?php echo $data['to1'];?></h5></div>
                                        </div>
                                        <div class="col-lg-3">
                                                <div><h6 class="pt-1 text-secondary ">Date</h6></div>
                                                    <div class="text-uppercase"><h5><?php echo $data['date'];?></h5></div>
                                                <div><h6 class="pt-1 text-secondary ">Dept time</h6></div>
                                                    <div class="text-uppercase"><h5><?php echo $data['depttime'];?></h5></div>
                                                <div><h6 class="pt-1 text-secondary ">Transaction status</h6></div>
                                                    <div class="text-uppercase"><h5 class="text-success"><?php echo $data['payment_status'];?></h5></div>
                                        </div>
                                        <div class="col-lg-3">
                                                <div><h6 class="pt-1 text-secondary ">Flight no</h6></div>
                                                    <div class="text-uppercase"><h5><?php echo $data['flight_no'];?></h5></div>
                                                <div><h6 class="pt-1 text-secondary ">Board Till</h6></div>
                                                    <div class="text-uppercase"><h5><?php echo $board;?></h5></div>
                                                <div><h6 class="pt-1 text-secondary ">transaction Id</h6></div>
                                                    <div class="text-uppercase"><h5><?php echo "HIFL".$data['id'];?></h5></div>
                                    </div>
                                    </div>
                                    <!--<div class="col-lg-4">
                                            <a href="view_ticket.php?id><input type="submit" name="bycash"  class='form-control bg-success text-white' value="CASH"></a>
                                        </div>-->
                                </div>
                                <div class="card-footer text-right">
                                    <a href="pdf.php?id=<?php echo $book_id?>" ><input type="submit" value="print ticket" class="btn btn-danger text-uppercase"></a>
                                </div>
                                <?php endforeach?>
                </div>
            </div>
            <div class="col-lg-1">
            
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
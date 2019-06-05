<?php
session_start();
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
                        <a class="nav-link active text-white"><i class=""></i> My profile</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="#" id="view_ticket"><i class="fa fa-view"></i>View ticket</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link active text-white" href="#"><i class="fa fa-book"></i>Booking</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><i class="fa fa-cash"></i>Payment</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link text-white" href="update_detail.php"><i class="fa fa-edit"></i> Edit your Profile</a>
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
                        Enter details
                    </div>
                    <div class="card-body">
                    <?php
                        require("connection.php");
                        //echo $_GET['id'];
                        $sql="select * from flight where id='$_GET[id]'";
                        $result=mysqli_query($conn,$sql);
                        $datas3=array();
                            if(mysqli_num_rows($result)>0)
                                {
                                    //echo mysqli_num_rows($result);
                                    while($row=mysqli_fetch_assoc($result))
                                        {
                                            $datas3[]=$row;
                                        }
                                }
                                //print_r($datas3);
                            foreach ($datas3 as $data): ?>
                            <form method="POST" action="view_booking.php" id="form_login">
                                <hr>
                                <div>Flight Details</div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-lg-6">
                                        <div class="input-field col l12">
                                            <label for="from" >From</label>
                                            <input type="text" name="from" id="from" class='form-control' value="<?php echo $data['from1']  ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                            <div class="input-field col l12">
                                                <label for="to" >To</label>
                                                <input type="text" name="to" id="to" class="form-control" value="<?php echo $data['to1']  ?>" readonly>
                                            </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-4">
                                        <div class="input-field col l12">
                                            <label for="arrivaltime" >Date</label>
                                            <input type="text" name="date" id="date" class="form-control" value="<?php echo $_GET['date1']?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-field col l12">
                                            <label for="depttime" >Dept Time</label>
                                            <input type="text" name="depttime" id="depttime" class="form-control" value="<?php echo $data['depttime']  ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-field col l12">
                                            <label for="arrivaltime" >Arrival Time</label>
                                            <input type="text" name="arrivaltime" id="arrivaltime" class="form-control" value="<?php echo $data['arrivaltime']  ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-4">
                                        <div class="input-field col l12">
                                            <label for="type" >Type</label>
                                            <input type="text" name="type" id="type"  class="form-control" value="<?php echo $data['type']  ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-field col l12">
                                            <label for="airline" >Airline</label>
                                            <input type="text" name="airline" id="airline"  class="form-control" value="<?php echo $data['airline']  ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-field col l12">
                                            <label for="class1" >class</label>
                                            <?php
                                            $selectOption = $_POST['select'];
                                            $price4=$_POST['price4']?>
                                            <input type="text" name="class1" id="class1" class="form-control" value="<?php echo $selectOption ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-6">
                                        <div class="input-field col l12">
                                            <label for="price" >Price</label>
                                            <input type="text" name="price" id="price" class="form-control" value="<?php echo $price4  ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-field col l12">
                                            <label for="price" >flight no</label>
                                            <input type="text" name="flight_no" id="flight_no" class="form-control" value="<?php echo $data['flight_no']  ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div>Personal Details</div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-lg-6">
                                        <div class="input-field col l12">
                                            <label for="name" >Name</label>
                                            <input type="text" name="name" id="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-field col l12">
                                            <label for="email" >Emailid</label>
                                            <input type="text" name="email" id="email" class="form-control" value="<?php echo $_SESSION['email'] ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-12">
                                        <div class="input-field col l12">
                                            <label for="name" >no of passangers</label>
                                            <input type="number" name="no_of_passanger" id="no_of_passanger" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <input type="submit" class="btn btn-primary btn-block submit" name="book" value="Book" style="">
                                </div>
                        </form>
                        <?php endforeach?>
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
        
    </body>
</html>
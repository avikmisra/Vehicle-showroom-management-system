<?php
session_start();
$email=$_SESSION['email'];
?>
<?php
    require("connection.php");
    $msg="";
    $msgClass="";
    if(isset($_POST["edit"]))
    {
        echo "hello";
        //echo $_POST['from'];
        $name=htmlspecialchars($_POST['name']);
        $gender=htmlspecialchars($_POST['gender']);
        $dob=htmlspecialchars($_POST['date']);
        $email=htmlspecialchars($_POST['email']);
        $phone=htmlspecialchars($_POST['phone']);      
        $password=htmlspecialchars($_POST['password']);
        //echo

        if(!empty($name) && !empty($gender) && !empty($dob) && !empty($email) && !empty($phone) && !empty($password))
        {
      
                //require("connection.php");
                echo $gender;
                $query="update user set name='$name',gender='$gender',password='$password',dob='$dob',email='$email',phone='$phone' where email='ravi@gmail.com'" or die("Query failed: " . mysql_error());;
                mysqli_query($conn,$query);
                //echo "hello"; 
                $msg="plane added";
                $msgClass="alert-success";

        }
        else{
            echo "hello";
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
                         <a class="nav-link text-white active" href="#"><i class="fa fa-edit"></i> Edit your Profile</a>
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
                        $sql="select * from user where email='$email'";
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
                            <form method="POST" action="#" id="form_login">
                                <div class="form-row">
                                    <div class="col-lg-12">
                                        <div class="input-field col l12">
                                            <label for="name" >Name</label>
                                            <input type="text" name="name" id="name" class='form-control' value="<?php echo $data['name']  ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-12">
                                            <div class="input-field col l12">
                                                <label for="gender" >gender</label>
                                                <input type="text" name="gender" id="gender" class="form-control" value="<?php echo $data['gender']  ?>">
                                            </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-12">
                                        <div class="input-field col l12">
                                            <label for="dob">Date of birth</label>
                                            <input type="date" name="date" id="date" class="form-control" value="<?php echo $data['dob']?>">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-12">
                                        <div class="input-field col l12">
                                            <label for="email" >Email</label>
                                            <input type="text" name="email" id="email" class="form-control" value="<?php echo $data['email']  ?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-12">
                                        <div class="input-field col l12">
                                            <label for="password" >password</label>
                                            <input type="password" name="password" id="password" class="form-control" value="<?php echo $data['password']  ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-12">
                                        <div class="input-field col l12">
                                            <label for="phoneno" >phone no</label>
                                            <input type="number" name="phone" id="phone" class="form-control" value="<?php echo $data['phone']  ?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <input type="submit" class="btn btn-primary btn-block submit" name="edit" value="EDIT" style="">
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
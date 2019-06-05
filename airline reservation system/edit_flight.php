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
        //echo "hello";
        //echo $_POST['from'];
        $from=$_POST['from'];
       // $flight_no='null';
        $to=$_POST['to'];
        $depttime=$_POST['depttime'];
        $arrivaltime=$_POST['arrivaltime'];
        $type=$_POST['type'];
        $airline=$_POST['airline'];
        //$no_of_seats=$_POST['no_of_seats'];
        //$class1=$_POST['class1'];
        $price=$_POST['price'];
        //echo

        if(!empty($from) && !empty($to) && !empty($depttime) && !empty($arrivaltime) && !empty($type) && !empty($airline) && !empty($price) )
        {
      
                //require("connection.php");
                //echo $gender;
                $query="update flight set from1='$from',to1='$to',depttime='$depttime',arrivaltime='$arrivaltime',type='$type',airline='$airline',price='$price' where id='$_GET[id]'";
                mysqli_query($conn,$query);
                //echo "hello"; 
                $msg="plane added";
                $msgClass="alert-success";
                //echo "yo";

        }
        else{
            //echo "hello";
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
                        <a class="nav-link active"><i class="fa fa-tachometer-alt"></i> Dashboard</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="admin.php" id="add_plane"><i class="fa fa-user-plus"></i> Add Plane</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="update_admin_info.php"><i class="fa fa-user-tie"></i> View your Profile</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link text-white" href="update_admin_info.php"><i class="fa fa-user-edit"></i> Edit your Profile</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link text-white" href="admin.php" id="view_plane"><i class="fa fa-view"></i>view plane</a>
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
                            <form method="POST" action="#" id="form_login">
                                <hr>
                                <div>Flight Details</div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-lg-6">
                                        <div class="input-field col l12">
                                            <label for="from" >From</label>
                                            <input type="text" name="from" id="from" class='form-control' value="<?php echo $data['from1']  ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                            <div class="input-field col l12">
                                                <label for="to" >To</label>
                                                <input type="text" name="to" id="to" class="form-control" value="<?php echo $data['to1']  ?>">
                                            </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-6">
                                        <div class="input-field col l12">
                                            <label for="depttime" >Dept Time</label>
                                            <input type="text" name="depttime" id="depttime" class="form-control" value="<?php echo $data['depttime']  ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-field col l12">
                                            <label for="arrivaltime" >Arrival Time</label>
                                            <input type="text" name="arrivaltime" id="arrivaltime" class="form-control" value="<?php echo $data['arrivaltime']  ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-6">
                                        <div class="input-field col l12">
                                            <label for="type" >Type</label>
                                            <input type="text" name="type" id="type"  class="form-control" value="<?php echo $data['type']  ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-field col l12">
                                            <label for="airline" >Airline</label>
                                            <input type="text" name="airline" id="airline"  class="form-control" value="<?php echo $data['airline']  ?>">
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-12">
                                        <div class="input-field col l12">
                                            <label for="price" >Price</label>
                                            <input type="text" name="price" id="price" class="form-control" value="<?php echo $data['price']  ?>">
                                        </div>
                                    </div>
                                </div>
                                <hr>
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
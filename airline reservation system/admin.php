<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="src/css/font-awesome.min.css">
        <link rel="stylesheet" href="src/css/bootstrap.css">
        <link rel="stylesheet" href="src/css/style.css">
        <title>Airline Reservation System</title>
        <link rel="stylesheet" href="src/css/admin.css">
    </head>
<body>
<?php
     require("connection.php");
?>
<?php
    $msg="";
    $msgClass="";
    if(isset($_POST["addflight"]))
    {
       // echo "hello";
        $from=$_POST['from'];
        $flight_no='null';
        $to=$_POST['to'];
        $depttime=$_POST['depttime'];
        $arrivaltime=$_POST['arrivaltime'];
        $type=$_POST['type'];
        $airline=$_POST['airline'];
        $no_of_seats=$_POST['no_of_seats'];
        //$class1=$_POST['class1'];
        $price=$_POST['price'];
        //echo

        if(!empty($from) && !empty($to) && !empty($depttime) && !empty($arrivaltime) && !empty($type) && !empty($airline) && !empty($no_of_seats) && !empty($price) )
        {
      
                //require("connection.php");
                $query="insert into flight values('','$flight_no','$_POST[from]','$_POST[to]','$_POST[depttime]','$_POST[arrivaltime]','$_POST[type]','$_POST[airline]','$_POST[no_of_seats]','$_POST[price]')";
                mysqli_query($conn,$query);
                $msg="plane added";
                $msgClass="alert-success";
                $sql="select * from flight";
                $result=mysqli_query($conn,$sql);
                $datas=array();
                if(mysqli_num_rows($result)>0)
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $datas[]=$row;
                    }
                }
                //print_r($datas);
                foreach ($datas as $data): 
                    $type1= $data['type'];
                    $airline1=$data['airline'];
                    //echo $type1;
                    if($airline1=="airindia")
                    $x="AIR";
                    else if($airline1=="spicejet")
                    $x="SPI";
                    else if($airline1=="indigo")
                    $x="IND";
                    else
                    $x="JET";
                    if($type1=="domestic")
                    $y="DOM";
                    else
                    $y="INT";
                    $w=$data['id'];
                    $z="".$x.$y.$data['id'];
                    //session_start();
//$_SESSION['id']=$data['id'];
                // echo $z;
                    $query2="update flight set flight_no='$z' where id='$w'";
                    mysqli_query($conn,$query2);
                endforeach;


        }
        else{
            $msg="please fill in all fields";
            $msgClass="alert-danger";
        }
    }
    //header("location: admin.php");
    //exit;
?>
    <!--navbar-->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">
                <a href="admin.php" class="navbar-brand">ADMIN PANNEL</a>
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
                <div class="row align-items-center text-white mt-2">
                    <div class="col-3">
                    <img src="./src/img/profile.png" class="profile_image rounded-circle pl-1" alt="">
                    </div>
                    <div class="col-9">
                    <p class="m-0"><i>Admin</i></p>
                    </div>
                </div>
                <ul class="nav mt-2 sidebar flex-column">
                    <li class="nav-item">
                        <a class="nav-link active"><i class="fa fa-tachometer-alt"></i> Dashboard</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="#" id="add_plane"><i class="fa fa-user-plus"></i> Add Plane</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="update_admin_info.php"><i class="fa fa-user-tie"></i> View your Profile</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link text-white" href="update_admin_info.php"><i class="fa fa-user-edit"></i> Edit your Profile</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link text-white" href="#" id="view_plane"><i class="fa fa-view"></i>view plane</a>
                    </li>
                </ul>
        </div>
    <!--add flight-->
    <div class="col-10 right-section">
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body bg-info text-white text-center">
                            <h6><i class="fa fa-plus"></i>Add Flights</h6>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body bg-success text-white text-center">
                            <h6><i class="fa fa-book"></i>Booking</h6>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body bg-danger text-white text-center">
                            <h6><i class="fa fa-plus"></i>Flight details</h6>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="card " id="flight_details" style="display:none;">
                <div class="card-header" style="background-color:#F5F5F5">
                <div class="row">
                    <div class="col-11">
                        <h5>flightDetails</h5>
                    </div>
                    <div class="col-1">
                        <a href="" style="text-decoration:none;"> <h5 id="cancel">&times</h5></a>
                    </div>
                </div>
                </div>
                <div class="card-body" style="background-color:white">
                    <form method="post" action="admin.php">
                        <div class="form-row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Route info
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                            <div class="input-field col l12">
                                                <input type="text" name="from" id="from">
                                                <label for="from" >From</label>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="input-field col l12">
                                                <input type="text" name="to" id="to">
                                                <label for="to" >To</label>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                            <div class="card">
                                    <div class="card-header">
                                        Time info
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                            <div class="input-field col l12">
                                                 <input type="text" name="depttime" id="depttime">
                                                 <label for="depttime" >Dept Time</label>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="input-field col l12">
                                                <input type="text" name="arrivaltime" id="arrivaltime">
                                                <label for="arrivaltime" >Arrival Time</label>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">flight-details</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                            <div class="input-field col l12">
                                                <input type="text" name="type" id="type">
                                                <label for="type" >Type</label>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="input-field col l12">
                                                <input type="text" name="airline" id="airline">
                                                <label for="airline" >Airline</label>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="input-field col l12">
                                                <input type="text" name="no_of_seats" id="no_of_seats">
                                                <label for="no_of_seats" >No Of Seats</label>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">Price</div>
                                    <div class="card-body">
                                            <div class="input-field col l12">
                                                <input type="text" name="price" id="price">
                                                <label for="price" >price</label>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                 <input type="submit" value="Add flight" name="addflight" class="btn bg-danger mb-0 mt-2 mr-auto" id="addflight"> 
                            </div>
                        </div>
                        <?php if($msg!="")
                        {
                        ?>
                        <div class="alert <?php echo $msgClass?> text-center" id="msg"><?php echo $msg?></div>
                        <?php
                        }?>
                    </form>
                </div>
            </div>
            <!--view flight details-->
            <table class="table table-striped table-secondary table-hover" id="view_table" >
            <thead class="bg-info text-white">
              <tr class="text-center">
                <th scope="col">Flight_no</th>       
                <th scope="col">From</th>
                <th scope="col">to</th>
                <th scope="col">Airline</th>
                <th scope="col">depttime </th>
                <th scope="col">Arrival time </th>
                <th scope="col">no_of_seats</th>
                <th scope="col">Price</th>
                <th scope="col">remove</th>
                <th scope="col">edit</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <?php 
              $sql="select * from flight";
              $result=mysqli_query($conn,$sql);
              $datas=array();
              if(mysqli_num_rows($result)>0)
              {
                  while($row=mysqli_fetch_assoc($result))
                  {
                      $datas[]=$row;
                  }
              }
              //print_r($datas);
              foreach ($datas as $data):?>
              <tr class="text-center">
                <td><?php echo $data['flight_no']; ?></td>
                <td><?php echo $data['from1']; ?></td>
                <td><?php echo $data['to1']; ?></td>
                <td><?php echo $data['airline']; ?></td>
                <td><?php echo $data['depttime']; ?></td>
                <td><?php echo $data['arrivaltime']; ?></td>
                <td><?php echo $data['no_of_seats']; ?></td>
                <td><?php echo $data['price']; ?></td>
                <td><button class="btn btn-danger" name="remove" ><a href="delete.php?id=<?php echo $data['id']?>" class="text-white" style="text-decoration:none;">remove</a></button></td>
                <td><button class="btn btn-danger" name="edit" ><a href="edit_flight.php?id=<?php echo $data['id']?>" class="text-white" style="text-decoration:none;">edit</a></button></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

    </div>
</div>
    


        <script src="src/js/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
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
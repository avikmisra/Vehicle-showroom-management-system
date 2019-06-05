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
    </head>

    <body>
    <!--log in modal-->
    <?php
       include("login2.php");
    ?>
       <!--sign up modal-->
       <?php
        include("signup.php");
    ?>
        <!--navbar-->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">
                <a href="index.html" class="navbar-brand">TRIVAGO</a>
                <button type="button" name="button" class="navbar-toggler" data-toggle="collapse" data-target="#navNavbar"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="About Us.html" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="Services.html" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="Blog.html" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="Contact.html" class="nav-link">Contact</a>
                    </li>
                    <?php
                     if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                        //echo "hello";
                    ?>
                        <div class="nav-link dropdown">
                            <div class="dropdown-toggle text-secondary"  data-toggle="dropdown">Hey<span class="caret"></span></div>
                            <ul class="dropdown-menu">
                                <li class="nav-link"><a href="#" style="text-decoration:none;">My profile</a></li>
                                <li class="nav-link"><a href="#" style="text-decoration:none;">Print ticket</a></li>
                                <li class="nav-link"><a href="logout.php" style="text-decoration:none;">log out</a></li>
                            </ul>
                     </div>
                        
                    <?php
                    } 
                    else 
                    {
                    ?>
                        <a href="#" class="nav-link fa fa-user" style="padding-top:12px;" data-toggle="modal" data-target="#myModal2"> LOG IN</a>
                    <?php
                    }
                    ?>
                    <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#myModal" > sign in</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
        <!--main body-->
        <div class="container">
            <div class="row">
                <!--for departure-->
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-3 mt-4" >
                        <div><h4 class="pt-2 ">Depart</h4></div>
                            <div><h6 class="text-secondary">
                                <?php
                                    if(isset($_POST['search']))
                                    {
                                        $dept=$_POST['dept'];
                                        echo $dept;
                                    }

                                ?>
                            </h6></div>
                        </div>
                        <div class="col-md-3 mt-4 border border-top-0  border-right-0 border-bottom-0 border-secondary">
                            <div><h4 class="pt-2 ">From</h4></div>
                            <div><h6 class="text-secondary">
                                <?php
                                    if(isset($_POST['search']))
                                    {
                                        $from=$_POST['from'];
                                        echo $from;
                                    }

                                ?>
                            </h6></div>
                        </div>
                        <div class="col-md-1 mt-4">
                            <i class="fa fa-plane fa-rotate-45 pt-2"></i>
                        </div>
                        <div class="col-md-2 mt-4">
                        <div><h4 class="pt-2 ">To</h4></div>
                            <div><h6 class="text-secondary">
                                <?php
                                    if(isset($_POST['search']))
                                    {
                                        $to=$_POST['to'];
                                        echo $to;
                                    }

                                ?>
                            </h6></div>
                        </div>
                        <div class="col-md-3">
                            <div><img src="src/img/best_price.png" alt="best" style="height:90px;width:70px;" class="text-center"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex flex-row justify-content-left">
                            <div class="p-3"><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" class="form-control"></div>
                            <div class="p-3"><button  id="myInput2" onclick="myFunction2(3)" class="btn btn-primary" value="sort">Sort List</button></div>
                        </div>
                        <table class="table table-striped table-secondary table-hover" id="view_table" style="background-color:#f5f5f5" >
                            <thead class="text-white text-uppercase" style="background-color:#19357D;">
                                <tr class="text-center">
                                    <th scope="col">Airline</th>
                                    <th scope="col">depttime </th>
                                    <th scope="col">Arrival</th>
                                    <th scope="col">price</th>
                                    <th scope="col">class</th>
                                    <th scope="col">no_of_seats</th>
                                    <th scope="col">book </th>
                                </tr>
                            </thead>
                            <tbody class="text-capitalize">
                            <?php
                                $msg="";
                                $msgColor="";
                                if(isset($_POST['search']))
                                {
                                    $from=$_POST['from'];
                                    $to=$_POST['to'];
                                    $dept=$_POST['dept'];
                                    $return=$_POST['return'];
                                    $passanger=$_POST['passanger'];
                                    //echo $email2;
                                    if(!empty($from)  && !empty($to) && !empty($dept) && !empty($return) && !empty($passanger))
                                    {
                                        //echo $from;
                                        //echo $to;
                                        //require("connection.php");
                                        //echo $c;
                                        $query=mysqli_query($conn,"select * from flight where from1='$_POST[from]' && to1='$_POST[to]'");
                                        $datas2=array();
                                        if(mysqli_num_rows($query)>0)
                                            {
                                                while($row=mysqli_fetch_assoc($query))
                                                {
                                                    $datas2[]=$row;
                                                }
                                            }
                                        else
                                            {
                                                $msg="no flights are there";
                                                $msgColor="alert-danger";
                                            }
                                            foreach ($datas2 as $data): ?>
                                            <tr class="text-center">
                                                <td><?php echo $data['airline']; ?></td>
                                                <td><?php echo $data['depttime']; ?></td>
                                                <td><?php echo $data['arrivaltime']; ?></td>
                                                <?php
                                                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                                                //echo "hello";
                                                ?>
                                                <form action="book.php?id=<?php echo $data['id']?>&date1=<?php echo $dept?>" method="POST">
                                                <td>
                                                <input class="form-control" type="number" value="<?php echo $data['price']; ?>" id="price3" name="price4">
                                                </td>
                                                <td>
                                                <select class="browser-default custom-select" name="select" id="select1">
                                                    <option value='economic' class="active" id="opt_eco">economic</option>
                                                    <option value='business' id="opt_bus">business</option>
                                                </select>
                                                </td>
                                                <td><?php echo $data['no_of_seats']; ?></td>
                                                <td><button type="submit" class="btn btn-success" name="Book" value="BOOK">BOOK</button></td>
                                                </form>
                                                <?php
                                                }
                                                else
                                                {
                                                echo "hello";
                                                }
                                                ?>
                                            </tr>
                                            <?php endforeach; ?>


                                    <?php    
                                    }
                                else{
                                        $msg="plese fill in all details";
                                        $msgColor="alert-danger";
                                    }
                                }
                                else{
                                }
                               ?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-3">

                </div>
                <!-- for return-->
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-3 mt-4" >
                        <div><h4 class="pt-2 ">Return</h4></div>
                            <div><h6 class="text-secondary">
                                <?php
                                    if(isset($_POST['search']))
                                    {
                                        $return=$_POST['return'];
                                        echo $return;
                                    }

                                ?>
                            </h6></div>
                        </div>
                        <div class="col-md-3 mt-4 border border-top-0  border-right-0 border-bottom-0 border-secondary">
                            <div><h4 class="pt-2 ">From</h4></div>
                            <div><h6 class="text-secondary">
                                <?php
                                    if(isset($_POST['search']))
                                    {
                                        $from=$_POST['to'];
                                        echo $from;
                                    }

                                ?>
                            </h6></div>
                        </div>
                        <div class="col-md-1 mt-4">
                            <i class="fa fa-plane fa-rotate-45 pt-2"></i>
                        </div>
                        <div class="col-md-2 mt-4">
                        <div><h4 class="pt-2 ">To</h4></div>
                            <div><h6 class="text-secondary">
                                <?php
                                    if(isset($_POST['search']))
                                    {
                                        $to=$_POST['from'];
                                        echo $to;
                                    }

                                ?>
                            </h6></div>
                        </div>
                        <div class="col-md-3">
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-striped table-hover pb-5" id="view_table" style="background-color:#f5f5f5">
                            <thead class="text-white text-uppercase" style="background-color:#19357D;">
                                <tr class="text-center">
                                    <th scope="col">Airline</th>
                                    <th scope="col">depttime </th>
                                    <th scope="col">Arrival</th>
                                    <th scope="col">price</th>
                                    <th scope="col">class</th>
                                    <th scope="col">no_of_seats</th>
                                    <th scope="col">book </th>
                                </tr>
                            </thead>
                            <tbody class="text-capitalize">
                            <?php
                                $msg="";
                                $msgColor="";
                                if(isset($_POST['search']))
                                {
                                    $from=$_POST['from'];
                                    $to=$_POST['to'];
                                    $dept=$_POST['dept'];
                                    $return=$_POST['return'];
                                    $passanger=$_POST['passanger'];
                                    //echo $email2;
                                    if(!empty($from)  && !empty($to) && !empty($dept) && !empty($return) && !empty($passanger))
                                    {
                                        //echo $from;
                                        //echo $to;
                                        //require("connection.php");
                                        //echo $c;
                                        $query=mysqli_query($conn,"select * from flight where from1='$_POST[to]' && to1='$_POST[from]'");
                                        $datas2=array();
                                        if(mysqli_num_rows($query)>0)
                                            {
                                                while($row=mysqli_fetch_assoc($query))
                                                {
                                                    $datas2[]=$row;
                                                }
                                            }
                                        else
                                            {
                                                $msg="no flights are there";
                                                $msgColor="alert-danger";
                                            }
                                            foreach ($datas2 as $data): ?>
                                            <tr class="text-center">
                                                <td><?php echo $data['airline']; ?></td>
                                                <td><?php echo $data['depttime']; ?></td>
                                                <td><?php echo $data['arrivaltime']; ?></td>
                                                <?php
                                                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                                                //echo "hello";
                                                ?>
                                                <form action="book.php?id=<?php echo $data['id']?>&date1=<?php echo $dept?>" method="POST">
                                                <td>
                                                <input type="text" value="<?php echo $data['price']; ?>" class="form-control" id="price3">
                                                </td>
                                                <td>
                                                <select class="browser-default custom-select" name="select" id="select1">
                                                    <option value='economic' class="active">economic</option>
                                                    <option value='business'>business</option>
                                                </select>
                                                </td>
                                                <td><?php echo $data['no_of_seats']; ?></td>
                                                <td><button type="submit" class="btn btn-success" name="Book" value="BOOK">BOOK</button></td>
                                                </form>
                                                <?php
                                                }
                                                else
                                                {
                                                echo "hello";
                                                }
                                                ?>
                                            </tr>
                                            <?php endforeach; ?>

                                    <?php    
                                    }
                                else{
                                        $msg="plese fill in all details";
                                        $msgColor="alert-danger";
                                    }
                                }
                                else{
                                    echo "hello";
                                }?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-3">
                </div>
            </div>
        </div>
                

        <!--footer-->
        <div class="footer" style="background-color:#0f204b;">
            <div class="row">
                <div class="col-lg-6">
                    <div  class="p-4  text-white text-center"><small>Trivago@ ,All rights reserved</small></div>
                </div>
                <div class="col-lg-6 d-flex flex-row justify-content-center">
                    <div class="p-2  text-white"><i class="fa fa-facebook text-left p-3" style="font-size:30px;"></i></div>
                    <div class="p-2  text-white"><i class="fa fa-twitter text-left p-3" style="font-size:30px;"></i></div>
                    <div class="p-2  text-white"><i class="fa fa-linkedin text-left p-3" style="font-size:30px;"></i></div>
                    <div class="p-2  text-white"><i class="fa fa-instagram text-left p-3" style="font-size:30px;"></i></div>
                </div>
            </div>
        </div>

        <script src="src/js/jquery.min.js"></script>
        <script src="src/js/popper.min.js"></script>
        <script src="src/js/bootstrap.min.js"></script>
        <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("view_table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
function myFunction2(n) {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("view_table");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      //check if the two rows should switch place:
      if (x.innerHTML> y.innerHTML) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>
        <script src="src/js/app2.js"></script>
        <script src="src/js/search.js"></script>
    </body>
</html>

<?php 
 $flag=1;
    $msg="";
    $msgClass="";
if(isset($_POST['create_item']))
{
    
                        $from=$_POST['from'];
        $to=$_POST['to'];
        $depttime=$_POST['depttime'];
        $arrivaltime=$_POST['arrivaltime'];
        $type=$_POST['type'];
        $airline=$_POST['airline'];
        $no_of_seats=$_POST['no_of_seats'];
        $class1=$_POST['class'];
        $price=$_POST['price'];
        //echo
        $id1=substr($type,0,2).$flag.substr($airline,0,2);
        $flag++;
        if(!empty($from) && !empty($to) && !empty($depttime) && !empty($arrivaltime) && !empty($type) && !empty($airline) && !empty($no_of_seats) && !empty($class1) && !empty($price))
        {
                $query="INSERT into flight values('$id1','$_POST[from]','$_POST[to]','$_POST[depttime]','$_POST[arrivaltime]','$_POST[type]','$_POST[airline]','$_POST[no_of_seats]','$_POST[class]','$_POST[price]')";
                mysqli_query($conn,$query); 
                $msg="plane added";
                $msgClass="alert-success";
    
    
    }
    else{
            $msg="please fill in all fields";
            $msgClass="alert-danger";
        }    
}





?>
   

   

   
   <form action="" method="post" enctype="multipart/form-data">
    
    
    
    <div class="form-group">
        <label for="title">From</label>
        <input type="text" class="form-control" name="from">
    </div>
        

    <div class="form-group">
        <label for="title">To</label>
        <input type="text" class="form-control" name="to">
    </div>
   <div class="form-group">
        <label for="title">Departure Time</label>
        <input type="text" class="form-control" name="depttime">
    </div>  
     <div class="form-group">
        <label for="title">Arrival Time</label>
        <input type="text" class="form-control" name="arrivaltime">
    </div>
     <div class="form-group">
        <label for="title">Type</label>
        <input type="text" class="form-control" name="type">
    </div>
     <div class="form-group">
        <label for="title">Airline</label>
        <input type="text" class="form-control" name="airline">
    </div>
     <div class="form-group">
        <label for="title">Number Of Seats</label>
        <input type="text" class="form-control" name="no_of_seats">
    </div>
     <div class="form-group">
        <label for="title">Class</label>
        <input type="text" class="form-control" name="class">
    </div>
     <div class="form-group">
        <label for="title">Price</label>
        <input type="text" class="form-control" name="price">
    </div>
    
     <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_item" value="Add Item">
    </div>
    
    
    

    
    
</form>
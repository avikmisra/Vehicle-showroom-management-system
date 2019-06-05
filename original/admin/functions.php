<?php
function usersonline()
{
    
    
    if(isset($_GET['onlineusers']))
    {
        
    
    
    
        global $conn;
        if(!$conn)
        {
            session_start();
            include("../includes/db.php");
            
            
        

     $session=session_id();  
       $time=time(); 

    $time_outinsec=05;

    $time_out=$time- $time_outinsec;


$query="SELECT * from users_online where session='$session'";

$queryop=mysqli_query($conn,$query);

$count=mysqli_num_rows($queryop);

if($count== NULL)
{
    mysqli_query($conn,"INSERT into users_online(session,time)values('$session','$time')");
    
    
}
else
{
    
      mysqli_query($conn,"update  users_online set time ='$time' where session='$session'");
  
    
    
}

$usersonlin= mysqli_query($conn,"SELECT * from users_online where time >'$time_out'");

 echo $count_user=mysqli_num_rows($usersonlin);

        
        
    }

}



}
usersonline();





function confirm($result)
{
    global $conn;
     if(!$result)
    {
        die("QUERY failed .". mysqli_error($conn));
    }

    
}

                               



 





?>
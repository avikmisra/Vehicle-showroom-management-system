<?php
require("connection.php");
$query="delete from ticket where id='$_GET[id]'";
if(mysqli_query($conn,$query))
{
    //echo "deleted";
    header("refresh:0.3; url=view_booking.php");
}
else
{
    echo "not deleted";
}

?>
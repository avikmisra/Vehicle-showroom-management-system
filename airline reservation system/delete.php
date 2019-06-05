<?php
require("connection.php");
$query="delete from flight where id='$_GET[id]'";
if(mysqli_query($conn,$query))
{
    //echo "deleted";
    header("refresh:0.3; url=admin.php");
}
else
{
    echo "not deleted";
}

?>
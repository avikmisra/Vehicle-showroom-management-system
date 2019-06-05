<?php
session_start();
include 'dbConfig.php';
$logname = $_POST['usrname'];
$logpass = $_POST['password'];

if(isset($_POST['usrname'])) {
    $name = $_POST['usrname'];
}

if(isset($_POST['password'])) {
    $name = $_POST['password'];
}
if($logname != null && trim($logname) !="" && trim($logpass) !="" && $logpass !=null)
{
    $getvalue  ="";
    $sql_query = "Select * from signup where username='".$logname."'and password ='".$logpass."'";
    $changepass="";
    $result_set = mysqli_query($con,$sql_query);

    if(mysqli_num_rows($result_set)==0){
        echo "<script>alert('Invalid Username/Password');window.location.href='index.php'</script>";        
    }else{
         while($row=mysqli_fetch_row($result_set))
        {
        $getvalue = $row[0];
        $changepass = $row[3];
        }
        $_SESSION["usrnam"] = $getvalue;
        if($changepass=="Y"){
            echo "<script>window.location.href='changepassword.php'</script>";
        }else
        {
        echo "<script>window.location.href='dashboard.php'</script>";
        }
    }

}else{
    echo "<script>alert('Invalid Username/Password');window.location.href='index.php'</script>";        
}
?>
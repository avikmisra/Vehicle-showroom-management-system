<?php include "includes/adminheader.php" ?>
   
  
 <?php 

if(isset($_SESSION['username']))
{
  $username=   $_SESSION['username'];
    
    $query= "select * from users where Email='{$username}'";
    
    $select_profile=mysqli_query($conn,$query);
    
    while($row=mysqli_fetch_array( $select_profile))
    {
        
                $name=$row['u_name'];
                $email=$row['u_email'];
                $gender=$row['u_gender'];
                $password=$row['u_password'];
                $dob=$row['u_dob'];
                $phone_no=$row['u_phone'];
     }
    
    
}


?>   
  
  <?php


if(isset($_POST['edit_user']))
{
    
   $name=$_POST['u_name'];
                $email=$_POST['u_email'];
                $gender=$_POST['u_gender'];
                $password=$_POST['u_password'];
                $dob=$_POST['u_dob'];
                $phone_no=$_POST['u_phone'];  
     
         
         
         
         
         $query="update users set ";
        
       $query.="name='{$name}', ";
                $query.="Email='{$u_email}', ";
//$query.="post_date=now(),";
                $query.="Gender='{$u_gender}', ";

            
                $query.="Password='{$user_email}', ";
               // $query.="post_tag='{$post_tag}',";
               $query.="dob='{$dob}' ";
               $query.="Phone_No='{$phone_no}' ";
        
        
                        $query.="where Email='{$username}' ";


            $update_query=mysqli_query($connection,$query);
          
        confirm($update_query);
    
     
    
    echo "<p>User Updated .<a href='users.php'>View all</a></p>";
       
     }




?>
   
   
   
    <div id="wrapper">
        
        
    
        <!-- Navigation -->
        <?php include "includes/adminnavigation.php" ?>

     
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                    <h1 class="page-header">
                            Welcome Admin
                        </h1>
                  

   
   <form action="" method="post" enctype="multipart/form-data">
    
     <div class="form-group">
        <label for="title">Name</label>
    <input type="text" class="form-control" value="<?php echo $name;?>" name="u_name">
    </div>
    
    <div class="form-group">
        <label for="post_status">Email</label>
        <input type="text" class="form-control" value="<?php echo $Email;?>" name="u_email">
    </div>
    
   
    <div class="form-group">
        <label for="post_content">Gender</label>
                <input type="email" class="form-control" value="<?php echo $Gender;?>"name="u_gender">

    </div>
    
     <div class="form-group">
        <label for="post_content">Password</label>
                <input type="password" class="form-control" value="<?php echo $Password;?>"name="u_password">

    </div>
    <div class="form-group">
        <label for="post_content">D.O.B</label>
                <input type="text" class="form-control" value="<?php echo $dob;?>"name="u_dob">

    </div>
    <div class="form-group">
        <label for="post_content">Phone_No</label>
                <input type="text" class="form-control" value="<?php echo $phone_no;?>"name="u_phone">

    </div>
    
     <div class="form-group">
        <input type="submit" class="btn btn-primary" name="edit_user" value="Update Profile">
    </div>
</form>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        <?php include "includes/adminfooter.php" ?>


<?php include "includes/adminheader.php" ?>
   
  
 <?php 

if(isset($_SESSION['username']))
{
  $username=   $_SESSION['username'];
    
    $query= "select * from users where f_name='{$username}'";
    
    $select_profile=mysqli_query($conn,$query);
    
    while($row=mysqli_fetch_array( $select_profile))
    {
        
                $user_id=$row['u_id'];


                $user_password=$row['u_pass'];
                $user_firstname=$row['f_name'];




                $user_lastname=$row['l_name'];

                $user_email=$row['u_email'];
                                $user_gender=$row['u_gender'];


                //$user_image=$row['user_image'];
                $user_role=$row['u_type'];


                
        
        
        
        
    }
    
    
}






?>   
  
  <?php


if(isset($_POST['edit_user']))
{
    
   $user_firstname=$_POST['user_firstname'];
       $user_lastname=$_POST['user_lastname'];
     
    
        $user_name=$_POST['user_name'];
    
       // $post_image=$_FILES['image']['name'];
         //   $post_image_temp=$_FILES['image']['temp_name'];

    
        $user_email=$_POST['user_email'];
        $user_password=$_POST['user_password'];
   // $post_date=date(d-m-y);
     

     if(!empty($user_password)) 
         
        {
        $query_pass="select user_password from users where user_name='{$username}'";
         $get_user= mysqli_query($connection, $query);
     
      
         
    confirm($get_user);
         $row=mysqli_fetch_array($get_user);
         
         $dbuser_password=$row['user_password'];
         
       
         if($dbuser_password !=$user_password)
         {
           $hasedpass=password_hash($user_password,PASSWORD_BCRYPT,array('cost'=>10));
  
             
         }
         
         
     
         
         
         
         
         $query="update users set ";
        
       $query.="user_firstname='{$user_firstname}', ";
                $query.="user_lastname='{$user_lastname}', ";
//$query.="post_date=now(),";
                $query.="user_name='{$user_name}', ";

            
                $query.="user_email='{$user_email}', ";
               // $query.="post_tag='{$post_tag}',";
                $query.="user_password='{$hasedpass}' ";
        
        
                        $query.="where user_name='{$username}' ";


            $update_query=mysqli_query($connection,$query);
          
        confirm($update_query);
    
     
    
    echo "<p>User Updated .<a href='users.php'>View all</a></p>";
       
     }
    
    

/*and post image is not working 



    
  */ 


}



?>
   




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
                            <small>Author</small>
                        </h1>
                  

   
   <form action="" method="post" enctype="multipart/form-data">
    
     <div class="form-group">
        <label for="title">Firstname</label>
    <input type="text" class="form-control" value="<?php echo $user_firstname;?>"name="user_firstname">
    </div>
    
    <div class="form-group">
        <label for="post_status">Lastname</label>
        <input type="text" class="form-control" value="<?php echo $user_lastname;?>" name="user_lastname">
    </div>
    
   
    <div class="form-group">
        <label for="post_content">Email</label>
                <input type="email" class="form-control" value="<?php echo $user_email;?>"name="user_email">

    </div>
    
     <div class="form-group">
        <label for="post_content">Password</label>
                <input type="password" class="form-control" autocompelete="off"name="user_password">

    </div>
    
    
    
     <div class="form-group">
        <input type="submit" class="btn btn-primary" name="edit_user" value="Update Profile">
    </div>
    
    
    
    
    
    
    
    
     
       
       
       
     
    
  
  <!--  <div class="form-group">
        <label for="post_image">Post Image</label>
        <input type="file" name="image">
    </div> -->
    
    
   
    
    
 
    
    
    
</form>
                 
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        <?php include "includes/adminfooter.php" ?>


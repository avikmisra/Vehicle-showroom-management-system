<?php

        $conn = mysqli_connect("localhost","root","","vsms");

  ?>
<?php

if(isset($_GET['edit_user']))
{
  $user_id=$_GET['edit_user'];
    
       $query="SELECT * from users where u_id=$user_id";
        $select_users=mysqli_query($conn,$query);

        while($row=mysqli_fetch_assoc($select_users))
        {

        $user_id=$row['u_id'];

            
                    $user_password=$row['u_pass'];
                    $user_firstname=$row['f_name'];


            
            
                    $user_lastname=$row['l_name'];
            
                            $user_email=$row['u_email'];
                               $user_type=$row['u_type'];


                
        }
    







if(isset($_POST['edit_user']))
{
    
    
   $user_firstname=$_POST['user_firstname'];
       $user_lastname=$_POST['user_lastname'];
 $user_type=$_POST['user_type'];
     
    
        
    
       // $post_image=$_FILES['image']['name'];
         //   $post_image_temp=$_FILES['image']['temp_name'];

    
        $user_email=$_POST['user_email'];
        $user_password=$_POST['user_password'];
   // $post_date=date(d-m-y);
     

     if(!empty($user_password)) 
         
        {
        $query_pass="SELECT u_pass FROM users WHERE u_id='{$user_id}'";
         $get_user= mysqli_query($conn, $query);
     
      
         
    confirm($get_user);
         $row=mysqli_fetch_array($get_user);
         
         $dbuser_password=$row['u_pass'];
         
       
        
         
              $query="UPDATE users set ";
        
       $query.="f_name='{$user_firstname}', ";
                $query.="l_name='{$user_lastname}', ";
//$query.="post_date=now(),";
                $query.="u_type='{$user_type}', ";

            
                $query.="u_email='{$user_email}', ";
               // $query.="post_tag='{$post_tag}',";
                $query.="u_pass='{$user_password}' ";
        
        
                        $query.="where u_id={$user_id} ";


            $update_query=mysqli_query($conn,$query);
          
        confirm($update_query);
    
     
    
    echo "<p>User Updated .<a href='users.php'>View all</a></p>";
       
     }
    
    }
}?>
   

   

   
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
        
        <select name="user_type" id="">
                       <option value="<?php echo $user_type;?>"><?php echo $user_type;?></option>
                       
            <?php 
            
            if($user_type=='admin')
            {
                echo "<option value='user'>user</option>";
                
            }
            else
            {
                echo "<option value='admin'>admin</option>";
                
            }
            
            
            
            
            
            ?>           
                       
                       
                       

            
            

            
            
            
            
        </select>
        
        
        
        
    </div>
    
    
    
    <div class="form-group">
        <label for="post_content">Email</label>
                <input type="email" class="form-control" value="<?php echo $user_email;?>"name="user_email">

    </div>
    
     <div class="form-group">
        <label for="post_content">Password</label>
                <input type="password" autocomplete="off" class="form-control" name="user_password">

    </div>
    
    
    
     <div class="form-group">
        <input type="submit" class="btn btn-primary" name="edit_user" value="Update User">
    </div>
    
    
    
    
    
    
    
    
     
       
       
       
     
    
  
  <!--  <div class="form-group">
        <label for="post_image">Post Image</label>
        <input type="file" name="image">
    </div> -->
    
    
   
    
    
 
    
    
    
</form>